<?
/** Tell WordPress to run la_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'la_setup' );
if ( ! function_exists( 'la_setup' ) ):
function la_setup() {
	add_editor_style('editor-style.css');
	add_theme_support( 'post-thumbnails' );
	//add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'quote', 'link','image' ) );
}
endif;

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main' => 'Main Menu',
		  'main_private' => 'Main Private Menu'
		)
	);
}


?>
<?php
// Generates semantic classes for each post DIV element
function la_post_class( $print = true ) {
	global $post, $la_post_alt;

	// hentry for hAtom compliace, gets 'alt' for every other post DIV, describes the post type and p[n]
	$c = array('hentry', "p$la_post_alt", $post->post_type, $post->post_status);

	// Category for the post queried
	foreach ( (array) get_the_category() as $cat )
		$c[] = 'category-' . $cat->slug;

	// Tags for the post queried
	foreach ( (array) get_the_tags() as $tag )
		$c[] = 'tag-' . $tag->slug;

	// For password-protected posts
	if ( $post->post_password )
		$c[] = 'protected';

	// Applies the time- and date-based classes (below) to post DIV
	la_date_classes(mysql2date('U', $post->post_date), $c);

	// If it's the other to the every, then add 'alt' class
	if ( ++$la_post_alt % 2 )
		$c[] = 'alt';

	// Separates classes with a single space, collates classes for post DIV
	$c = join(' ', apply_filters('post_class', $c));

	// And tada!
	return $print ? print($c) : $c;
}

// Define the num val for 'alt' classes (in post DIV and comment LI)
$la_post_alt = 1;

// Generates semantic classes for each comment LI element
function la_comment_class( $print = true ) {
	global $comment, $post, $la_comment_alt;

	// Collects the comment type (comment, trackback),
	$c = array($comment->comment_type);

	// Counts trackbacks (t[n]) or comments (c[n])
	if ($comment->comment_type == 'trackback') {
		$c[] = "t$la_comment_alt";
	} else {
		$c[] = "c$la_comment_alt";
	}

	// If the comment author has an id (registered), then print the log in name
	if ( $comment->user_id > 0 ) {
		$user = get_userdata($comment->user_id);

		// For all registered users, 'byuser'; to specificy the registered user, 'commentauthor+[log in name]'
		$c[] = "byuser comment-author-" . sanitize_title_with_dashes(strtolower($user->user_login));
		// For comment authors who are the author of the post
		if ( $comment->user_id === $post->post_author )
			$c[] = 'bypostauthor';
	}

	// If it's the other to the every, then add 'alt' class; collects time- and date-based classes
	la_date_classes(mysql2date('U', $comment->comment_date), $c, 'c-');
	if ( ++$la_comment_alt % 2 )
		$c[] = 'alt';

	// Separates classes with a single space, collates classes for comment LI
	$c = join(' ', apply_filters('comment_class', $c));

	// Tada again!
	return $print ? print($c) : $c;
}

// Generates time- and date-based classes for BODY, post DIVs, and comment LIs; relative to GMT (UTC)
function la_date_classes($t, &$c, $p = '') {
	$t = $t + (get_option('gmt_offset') * 3600);
	$c[] = $p . 'y' . gmdate('Y', $t); // Year
	$c[] = $p . 'm' . gmdate('m', $t); // Month
	$c[] = $p . 'd' . gmdate('d', $t); // Day
	$c[] = $p . 'h' . gmdate('H', $t); // Hour
}

// For category lists on category archives: Returns other categories except the current one (redundant)
function la_cats_meow($glue) {
	$current_cat = single_cat_title('', false);
	$separator = "\n";
	$cats = explode($separator, get_the_category_list($separator));

	foreach ( $cats as $i => $str ) {
		if ( strstr($str, ">$current_cat<") ) {
			unset($cats[$i]);
			break;
		}
	}

	if ( empty($cats) )
		return false;

	return trim(join($glue, $cats));
}

// For tag lists on tag archives: Returns other tags except the current one (redundant)
function la_tag_ur_it($glue) {
	$current_tag = single_tag_title('', '',  false);
	$separator = "\n";
	$tags = explode($separator, get_the_tag_list("", "$separator", ""));

	foreach ( $tags as $i => $str ) {
		if ( strstr($str, ">$current_tag<") ) {
			unset($tags[$i]);
			break;
		}
	}

	if ( empty($tags) )
		return false;

	return trim(join($glue, $tags));
}

// Nice Tag Cloud
function widget_nice_tagcloud($args) {
	extract($args);
	echo $before_widget; 
	echo $before_title. 'Tag Cloud'. $after_title;
	if ( function_exists('wp_tag_cloud') ) :
		echo '<p>'.wp_tag_cloud('orderby=count&order=DESC').'</p>';
		endif; 
		echo $after_widget; 
	}

register_sidebar_widget('Nice Tag Cloud','widget_nice_tagcloud');


// Adds filters so that things run smoothly
add_filter('archive_meta', 'wptexturize');
add_filter('archive_meta', 'convert_smilies');
add_filter('archive_meta', 'convert_chars');
add_filter('archive_meta', 'wpautop');


// Thanks very much to Thin & Light (http://thinlight.org/) for this custom function!
function tl_excerpt($text, $excerpt_length = 25) {
	$text = str_replace(']]>', ']]&gt;', $text);
	$text = strip_tags($text);
	$text = preg_replace("/\[.*?]/", "", $text);
	$words = explode(' ', $text, $excerpt_length + 1);
	if (count($words) > $excerpt_length) {
		array_pop($words);
		array_push($words, '...');
		$text = implode(' ', $words);
	}
	
	return apply_filters('the_excerpt', $text);
}

function tl_post_excerpt($post) {
	$excerpt = ($post->post_excerpt == '') ? (tl_excerpt($post->post_content))
			: (apply_filters('the_excerpt', $post->post_excerpt));
	return $excerpt;
}

function previous_post_excerpt($in_same_cat = false, $excluded_categories = '') {
	if ( is_attachment() )
		$post = &get_post($GLOBALS['post']->post_parent);
	else
		$post = get_previous_post($in_same_cat, $excluded_categories);

	if ( !$post )
		return;
	$post = &get_post($post->ID);
	echo tl_post_excerpt($post);
}

function next_post_excerpt($in_same_cat = false, $excluded_categories = '') {
	$post = get_next_post($in_same_cat, $excluded_categories);

	if ( !$post )
		return;
	$post = &get_post($post->ID);
	echo tl_post_excerpt($post);
}


// Custom the_excerpt formatting / hides [caption] short codes
function the_autofocus_excerpt($text) { // Fakes an excerpt if needed
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text, "<style>");
		$text = preg_replace("/\[.*?]/", "", $text);
		$excerpt_length = 25;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words, '&hellip;');
			$text = implode(' ', $words);
		}
	}
	return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'the_autofocus_excerpt');


// Post Attachment image function. Direct link to file. 
function the_post_image($size=thumbnail) {
	
	global $post;
	$linkedimgtag = get_post_meta ($post->ID, 'image_tag', true);

	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
		{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );

			echo ''.$attachmentimage.'';
		}
		
	} elseif ( $linkedimgtag ) {

		echo $linkedimgtag;

	} elseif ( $linkedimgtag && $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
		{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );

			echo ''.$attachmentimage.'';
		}
		
	} else {
		echo '<img src="' . get_bloginfo ( 'stylesheet_directory' ) . '/img/no-attachment-large.gif" />';
	}
}

//Setup Images for Attachment functions 
function image_setup($postid) {
	global $post;
	$post = get_post($postid);

	// get url
	if ( !preg_match('/<img ([^>]*)src=(\"|\')(.+?)(\2)([^>\/]*)\/*>/', $post->post_content, $matches) ) {
		return false;
	}

	// url setup
	$post->image_url = $matches[3];
	if ( !$post->image_url = preg_replace('/\?w\=[0-9]+/','', $post->image_url) )
		return false;

	$post->image_url = clean_url( $post->image_url, 'raw' );
	
	delete_post_meta($post->ID, 'image_url');
	delete_post_meta($post->ID, 'image_tag');

	add_post_meta($post->ID, 'image_url', $post->image_url);
	add_post_meta($post->ID, 'image_tag', '<img src="'.$post->image_url.'" />');

}

add_action('publish_post', image_setup);
add_action('publish_page', image_setup);

// Post Attachment image function for Attachment Pages. 
function the_attachment_image($size=large) {
	$attachmenturl=wp_get_attachment_url($image->ID);
	$attachmentimage=wp_get_attachment_image( $image->ID, $size );

	echo ''.$attachmentimage.'';
}

function lastfm_list($user) {
	$recenttracks = new SimpleXMLElement('http://ws.audioscrobbler.com/1.0/user/'.$user.'/recenttracks.xml', null, true);
	foreach($recenttracks as $track){ 
	echo '<li><a href="'.$track->url.'">'.$track->name.'</a> -- <em>'.$track->artist. /*' ('.$track->album.')*/'</em></li>';
	};

} // lastfm_list

function flickr_feed($flickr_feed){
$channel = new SimpleXMLElement($flickr_feed, null, true);
	$channel2 = $channel->channel->item;
	foreach($channel2 as $item){ 
	if($item->description != ''){
		$desc = $item->description; // Get the description.
		$image= substr($desc,strpos($desc, 'photo:')+16 ); // Remove the beginning text
		$excess = strpos($image, '</p>'); // Find how many characters exist after the <a><img><a> section
		$total = strlen($image); // Find how many characters the whole string has
		$keep = $total - $excess; // Calculate how many characters we want
		$image = substr($image,0,-$keep ); // Get the characters of our reduced string
		echo '<li>'.$image.'</li>'; //Show it!
		};
	}
}//flickr feed

function visualizus_feed($vis_feed){
$channel = new SimpleXMLElement($vis_feed, null, true);
	$channel2 = $channel->channel->item;
	foreach($channel2 as $item){
	if($item->description != ''){
		$image = $item->description;
		$image= substr($image,strpos($image , 'via')+15 ); 
		$image1= substr($image,0,-18 ); 
		echo '<li>'.$image1.'</a></li>';};
	}
}

function instapaper_feed($insta_feed){
	$channel = new SimpleXMLElement($insta_feed, null, true);
	$channel2 = $channel->channel->item;
	foreach($channel2 as $item){
	echo '<li><a href="'. $item->link.'" target="_blank">'.$item->title.'</a>';
	//if($item->description != ''){echo ' -- <em>'.$item->description.'</em>';};
	echo '</li>';	
	}
}

function RTM($RTM_feed){
$RTM = new SimpleXMLElement($RTM_feed, null, true);
	$RTMtasks = $RTM->entry;
	foreach($RTMtasks as $RTMtask){
	echo '<li><a href="http://www.rememberthemilk.com/">'.$RTMtask->title.'</a></li>';
	}
}




function cat_list($link, $num, $cat){
	$args = array(
			'tax_query' => array(array('taxonomy' => 'post_format','field' => 'slug','terms' => 'post-format-link','operator' => $link)),
			'posts_per_page' => $num, 
			'category_name' => $cat,
			'tag_name' => 'more'
			); 
			query_posts( $args );
	while ( have_posts() ) : the_post() ?>
		<li id="post-<?php the_ID() ?>" class="postlist <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
			<?php $custom = get_post_custom(); $link = $custom[link][0] ?>
			<?php if ($link && get_post_format() =='link'): ?>
			<a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a>
			<?php else: ?>
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			<?php endif; ?>
			<a href="<?php the_permalink();?>" class="perma">&bull;</a>
			<?php the_excerpt(); ?>
			<?php //the_content(); ?>		
		</li>
		<?php endwhile; rewind_posts();  }

function tag_list($num, $tag){
	$query = new WP_Query( 'tag='.$tag.'&posts_per_page='.$num);
	while ( $query->have_posts() ) : $query->the_post() ?>
		<li id="post-<?php the_ID() ?>" class="postlist <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
			<?php $custom = get_post_custom(); $link = $custom[link][0] ?>
			<?php if ($link && get_post_format() =='link'): ?>
			<a href="<?php echo $link?>" target="_blank"><?php the_title(); ?></a>
			<?php else: ?>
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			<?php endif; ?>
			<a href="<?php the_permalink();?>" class="perma">&bull;</a>
			<?php //the_excerpt(); ?>
			<?php //the_content(); ?>		
		</li>
		<?php endwhile; rewind_posts(); }		