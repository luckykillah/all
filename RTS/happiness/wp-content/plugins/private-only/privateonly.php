<?php
/*
Plugin Name: Private Only
Plugin URI: http://www.pixert.com/
Description: Redirects all non-logged in users to login form with custom login capability
Version: 2.0
Author: Kate Mag (Pixel Insert)
Author URI: http://www.pixert.com
*/
?>
<?php
/*
Copyright 2009 Kate Mag-Pixel Insert (email:studio[at]pixert dot com)
This program is free softwate; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
Public License for more detail

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software Fondation, Inc.,
51 Franklin St, Fifth Floor, Boston, MA 02110-1301 US
*/
?>
<?php
//login page - sweet!
  //define constant folder to the plugin
  $wp_content_dir = ABSPATH . 'wp-content';
  $wp_plugin_dir = $wp_content_dir . '/plugins';
  define( 'PO_LOGIN', $wp_plugin_dir . '/private-only' );
	define( 'PO_LOGIN_URL', $wp_plugin_dir . '/private-only' );
	define( 'PO_LOGIN_ADMIN', $wp_plugin_dir . '/private-only/admin' );
	define( 'PO_LOGIN_CSS', $wp_plugin_dir . '/private-only/css' );

  //load settings from database 
  if ( is_admin() )
		require_once( PO_LOGIN_ADMIN . '/settings-admin.php' );
	$po_login = get_option( 'po_login_settings' );
  function po_login_add_pages() {
	if ( function_exists( 'add_options_page' ) ) 
		$page=add_options_page( 'Private Only Custom Login', 'Private Only Custom Login', 'update_plugins' , 'privateonly.php', 'po_login_page');
  }
  //main function
  function po_custom_login() {
	global $po_login;
		echo '<!-- Private Only -->' . "\n\n";
?>
<?php if ( $po_login[ 'use_wp_logo' ] == true ) {} else { ?> 
<?php if ( $po_login[ 'po_logo' ] != '' ) { ?>
<style>
#login h1 a{
background: url(<?php echo $po_login[ 'po_logo' ]; ?>) no-repeat top center !important; 
}
</style>
<?php } else { ?>
<style>
#login h1 a{
display: none !important;
}
</style>
<?php } } ?>
<?php
		echo '<!-- Private Only by Kate Mag - @link: http://pixert.com-->' . "\n\n";
  }
  function po_login_plugin_actions($links, $file ) {
 	  if( $file == 'private-only/privateonly.php' && function_exists( "admin_url" ) ) {
		  $settings_link = '<a href="' . admin_url( 'options-general.php?page=privateonly.php' ) . '">' . __('Private Only Custom Login') . '</a>';
		  array_unshift( $links, $settings_link ); // before other links
	}
	return $links;
  }
  //add a settings page to menu
	add_action( 'admin_menu', 'po_login_add_pages' );
	add_action( 'login_head', 'po_custom_login' );
	//Add a settings page to the plugin menu
	add_filter( 'plugin_action_links', 'po_login_plugin_actions', 10, 2 );

//Main Private Only features
function private_only () {
  if (!is_user_logged_in() && !is_feed()) {
    auth_redirect();
  } 
}
function no_index () {
	echo "<meta name='robots' content='noindex,nofollow' />\n";
}
function log_in_message ($error) {
	global $error;
	$error="Only registered and logged in users are allowed to view this site. Please login now";
	return $error;
}
add_action('template_redirect','private_only');
add_action('login_head','no_index');
add_filter('login_headertitle','log_in_message');
?>
