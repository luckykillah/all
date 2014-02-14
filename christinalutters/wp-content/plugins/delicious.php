<?php
/*
Plugin Name: Delicious XML Importer
Plugin URI: http://sillybean.net/code/wordpress/delicious/
Description: Import links or posts from Delicious bookmarks. 
Author: Guillermo Moreno, Stephanie Leary
Author URI: http://sillybean.net/
Version: 0.2
Stable tag: 0.2
*/

/**
 * Delicious XML Importer v0.1
 *
 * Will process Delicious' XML export for importing posts into WordPress. Heavily based on
 * the RSS Importer included in WordPress.
 */

if ( !defined('WP_LOAD_IMPORTERS') )
	return;

// Load Importer API
require_once ABSPATH . 'wp-admin/includes/import.php';

if ( !class_exists( 'WP_Importer' ) ) {
	$class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
	if ( file_exists( $class_wp_importer ) )
		require_once $class_wp_importer;
}

if ( class_exists( 'WP_Importer' ) ) {
class Delicious_Import extends WP_Importer {

	var $posts = array ();
	var $file;

	function header() {
		echo '<div class="wrap">';
		screen_icon();
		echo '<h2>'.__('Import Delicious XML').'</h2>';
	}

	function footer() {
		echo '</div>';
	}

	function unhtmlentities($string) { // From php.net for < 4.3 compat
		$trans_tbl = get_html_translation_table(HTML_ENTITIES);
		$trans_tbl = array_flip($trans_tbl);
		return strtr($string, $trans_tbl);
	}

	function greet() {
		?>
		<div class="narrow">
		<p><?php _e('This importer allows you to import posts or links from your Delicious bookmarks.'); ?>
		<?php printf(__('<a href="%s">Visit this link to get an XML file of your bookmarks.</a> You will be asked to log in to your Delicious account.'), 'https://api.del.icio.us/v1/posts/all?meta=yes'); ?></p>
		
		<form enctype="multipart/form-data" method="post" action="admin.php?import=delicious&amp;step=1"><p>
		
		<label for="upload"><?php _e("Choose the XML file from your computer:"); ?></label>
		<input type="file" id="upload" name="import" size="25" />
		<input type="hidden" name="action" value="save" />
		<p><label for="bookmarksposts"><?php _e("Do you want your Delicious Bookmarks as"); ?> </label>
			<select name="bookmarksposts">
				<option value="posts"><?php _e("Posts"); ?></option>
				<option value="links"><?php _e("Links"); ?></option>
				<option value="links"><?php _e("Links as Posts"); ?></option>
			</select>?
		</p>
		
		<p><label for="categoriestags"><?php _e("If posts, do you want your Delicious Tags as "); ?></label>
			<select name="categoriestags">
				<option><?php _e("Categories"); ?></option>
				<option><?php _e("Tags"); ?></option>
			</select>?
		</p>
		<p class="submit">
			<input type="submit" name="submit" class="button" value="<?php echo esc_attr(__('Submit')); ?>" />
		</p>
		<?php wp_nonce_field('delicious-import'); ?>
		</form>
		</div>
	<?php
	}

	function get_posts() {
		global $wpdb;
		set_magic_quotes_runtime(0);
		$datalines = file($this->file); // Read the file into an array
		$importdata = implode('', $datalines); // squish it
		$importdata = str_replace(array ("\r\n", "\r"), "\n", $importdata);
		$xml = simplexml_load_string($importdata);
		$index = 0;
		foreach($xml->post as $post) {
		$post_title = $post['description'];
		$post_date_gmt = $post['time'];
		$post_date_gmt = strtotime($post_date_gmt);
		$post_date_gmt = gmdate('Y-m-d H:i:s', $post_date_gmt);
		$post_date = get_date_from_gmt( $post_date_gmt );
		$category = $post['tag'];
		$categories = explode(" ", $category);
		$cat_index = 0;
		foreach ($categories as $category) {
			$categories[$cat_index] = $wpdb->escape($this->unhtmlentities($category));
			$cat_index++;
		}
		$post_content = $post['extended'];
		$post_content = $wpdb->escape($this->unhtmlentities(trim($post_content)));

		$post_link = $post['href'];
		$post_link = $wpdb->escape($this->unhtmlentities(trim($post_link)));
		$post_link = '<p class="delicious_post_link"><a href="'.$post_link.'">'.$post_title.'</a></p>';
		$post_content = $post_content.$post_link;
		
			// Clean up content
			$post_content = preg_replace_callback('|<(/?[A-Z]+)|', create_function('$match', 'return "<" . strtolower($match[1]);'), $post_content);
			$post_content = str_replace('<br>', '<br />', $post_content);
			$post_content = str_replace('<hr>', '<hr />', $post_content);

			$post_author = 1;
			if ($post['shared'] == 'no') $post_status = 'private';
			else $post_status = 'publish';
			$this->posts[$index] = compact('post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_status', 'categories');
			$index++;
		}
	}
	
	function get_links() {
		global $wpdb;
		set_magic_quotes_runtime(0);
		$datalines = file($this->file); // Read the file into an array
		$importdata = implode('', $datalines); // squish it
		$importdata = str_replace(array ("\r\n", "\r"), "\n", $importdata);
		$xml = simplexml_load_string($importdata);
		$index = 0;
		foreach($xml->post as $post) {
			$link_name = $post['description'];
			$link_visible = 'Y';
			if ($post['shared'] == 'no') 
				$link_visible = 'N';
			$post_date_gmt = $post['time'];
			$post_date_gmt = strtotime($post_date_gmt);
			$post_date_gmt = gmdate('Y-m-d H:i:s', $post_date_gmt);
			$link_updated = get_date_from_gmt( $post_date_gmt );
			$category = $post['tag'];
			$link_category = explode(" ", $category);
			$cat_index = 0;
			foreach ($link_category as $category) {
				$cat_name = $wpdb->escape($this->unhtmlentities($category));
				$slug = sanitize_title($cat_name);
				$link_id = term_exists($slug, 'link_category');
				if (!$link_id) {
					$link_id = wp_insert_term($cat_name, 'link_category');
				}
				elseif (is_object($link_id))
					$link_id = $link_id->term_id;
				if (!is_wp_error( $link_id ) ) {
					$link_category[$cat_index] = $link_id['term_id'];
					$cat_index++;
				}
			}
			$link_notes = $post['extended'];
			$link_notes = $wpdb->escape($this->unhtmlentities(trim($link_notes)));

			$link_url = $post['href'];
			$link_url = $wpdb->escape($this->unhtmlentities(trim($link_url)));
		
			// Clean up content
			$link_notes = preg_replace_callback('|<(/?[A-Z]+)|', create_function('$match', 'return "<" . strtolower($match[1]);'), $link_notes);
			$link_notes = str_replace('<br>', '<br />', $link_notes);
			$link_notes = str_replace('<hr>', '<hr />', $link_notes);

			$this->posts[$index] = compact('link_url', 'link_name', 'link_updated', 'link_notes', 'link_visible', 'link_category');
			$index++;
		}
	}

	function import_posts() {
		echo '<ol>';
		$categoriestags = $_POST['categoriestags'];
		$cat_id = $_POST['cat_id'];
		foreach ($this->posts as $post) {
			echo "<li>".__('Importing post ');

			extract($post);

			if ($post_id = post_exists($post_title, $post_content, $post_date)) {
				_e('Post already imported');
			} else {
				$post_id = wp_insert_post($post);
				if ( is_wp_error( $post_id ) )
					return $post_id;
				else 
					echo ' <em>'.$post_title.'... </em>';
				if (!$post_id) {
					_e('Couldn&#8217;t get post ID');
					return;
				}
				if (0 != count($categories)) 
					if ($categoriestags == 'Tags') {
					wp_add_post_tags($post_id, $categories);
					}
					else {
					wp_create_categories($categories, $post_id);
					} 
				_e('Done !');
			}
			echo '</li>';
		}

		echo '</ol>';

	}
	
	function import_links() {
		echo '<ol>';

		foreach ($this->posts as $post) {
			echo "<li>".__('Importing link ');

			extract($post);

			$link_id = wp_insert_link($post);
				if ( is_wp_error( $link_id ) )
					return $link_id;
				else 
					echo ' <em>'.$link_name.'... </em>';
					
				if (!$link_id) {
					_e('Couldn&#8217;t get link ID');
					return;
				}
				_e('Done !');
			echo '</li>';
		}

		echo '</ol>';

	}

	function import() {
		$file = wp_import_handle_upload();
		if ( isset($file['error']) ) {
			echo $file['error'];
			return;
		}

		$this->file = $file['file'];
		if ($_POST['bookmarksposts'] == 'posts') {
			$this->get_posts();
			$result = $this->import_posts();
		}
		else {
			$this->get_links();
			$result = $this->import_links();
		}
		
		if ( is_wp_error( $result ) )
			return $result;
		wp_import_cleanup($file['id']);
		do_action('import_done', 'delicious');

		echo '<h3>';
		printf(__('All done. <a href="%s">Have fun!</a>'), 'link-manager.php');
		echo '</h3>';
	}

	function dispatch() {
		if (empty ($_GET['step']))
			$step = 0;
		else
			$step = (int) $_GET['step'];

		$this->header();

		switch ($step) {
			case 0 :
				$this->greet();
				break;
			case 1 :
				check_admin_referer('delicious-import');
				$result = $this->import();
				if ( is_wp_error( $result ) )
					echo $result->get_error_message();
				break;
		}

		$this->footer();
	}

	function Delicious_Import() {
		// Nothing.
	}
}

} // class_exists( 'WP_Importer' )

$delicious_import = new Delicious_Import();

register_importer('delicious', __('Delicious'), __('Import posts from a Delicious XML export file.'), array ($delicious_import, 'dispatch'));
?>