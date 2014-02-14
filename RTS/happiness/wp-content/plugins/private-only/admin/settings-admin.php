<?php
/*
Private Only 2.0
Need a WP expert? Hire me : studio[at]pixert.com
*/
function po_login_settings_args() {
	$settings_arr = array(
		
		/* logo or not? */
		'po_logo' => '',
		'use_wp_logo' => '',	
	);
	
	return $settings_arr;
}

/**
 * Handles the main plugin settings
 *
 * @since 0.3
 */
function po_login_page() {

	/*
	* Main settings variables
	*/
	$plugin_name = 'Private Only Custom Login';
	$settings_page_title = 'Private Only Custom Login Settings';

	/*
	* Grabs the default plugin settings
	*/
	$settings_arr = po_login_settings_args();

	/*
	* Add a new option to the database
	*/
	add_option( 'po_login_settings', $settings_arr );

	/*
	* Set form data IDs the same as settings keys
	* Loop through each
	*/
	$settings_keys = array_keys( $settings_arr );
	foreach ( $settings_keys as $key ) :
		$data[$key] = $key;
	endforeach;

	/*
	* Get existing options from database
	*/
	$settings = get_option( 'po_login_settings' );

	foreach ( $settings_arr as $key => $value ) :
		$val[$key] = $settings[$key];
	endforeach;

	/*
	* If any information has been posted, we need
	* to update the options in the database
	*/
  if (isset($_POST['po_submit']) && $_POST['po_submit'] == 'Y') :

		/*
		* Loops through each option and sets it if needed
		*/
		foreach ( $settings_arr as $key => $value ) :
			$settings[$key] = $val[$key] = $_POST[$data[$key]];
		endforeach;

		/*
		* Update plugin settings
		*/
		update_option( 'po_login_settings', $settings );
		
		/*
		* Output the settings page
		*/
        echo '<div class="wrap">';
		if ( function_exists('screen_icon') ) screen_icon();
		echo '<h2>' . $settings_page_title . '</h2>';
		echo '<div class="updated" style="margin:15px 0;">';
		echo '<p><strong>New Settings saved</strong></p>';
		echo '</div>';
		
	
	elseif (isset($_POST['po_submit']) && $_POST['po_submit'] == 'R') :

		foreach($settings_arr as $key => $value) :
			$settings[$key] = $val[$key] = $_POST[$data[$key]];
		endforeach;

		delete_option( 'po_login_settings', $settings );

		
		/*
		* Output the settings page
		*/
        echo '<div class="wrap">';
		if ( function_exists('screen_icon') ) screen_icon();
		echo '<h2>' . $settings_page_title . '</h2>';
		echo '<div class="updated" style="margin:15px 0;">';
		echo '<p><strong>Settings&prime;ve been reset.</strong></p>';
		echo '</div>';
		

	else :

		echo '<div class="wrap">';
		if ( function_exists('screen_icon') ) screen_icon();
		echo '<h2>' . $settings_page_title . '</h2>';
		
	endif;
?>

			<div id="poststuff">

				<form name="form0" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>" style="border:none;background:transparent;">

					<?php require_once( PO_LOGIN_ADMIN . '/settings.php' ); ?>

					<p class="submit" style="float:left;">
						<input type="submit" name="Submit"  class="button-primary" value="Save Changes" />
						<input type="hidden" name="po_submit" id="po_submit" value="Y" />
					</p>

				</form>
                
                <form name="form0" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="border:none;background:transparent;">
                
                    <p class="submit" style="float:left; margin-left:10px;">
                        <input type="submit" name="Reset" class="swg_warning" value="Delete/Reset" onclick="return confirm('Do you really want to delete/reset the plugin settings?');" />
                        <input type="hidden" name="po_submit" id="po_submit" value="R" />
                    </p>
            
                </form>

			</div>
            
			<br style="clear:both;" />

		</div>

<?php
}

?>
