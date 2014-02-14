<?php
/*
Plugin Name: Private Only, Disable Feed
Plugin URI: http://www.pixert.com/
Description: This sub plugin disable Feed
Version: 2.0
Author: Kate Mag (Pixel Insert)
Author URI: http://www.pixert.com
*/
//disable feed
function po_disable_feed() {
	 wp_die( __('<strong>Error:</strong> Feed unavailable!') );
}
add_action('do_feed', 'po_disable_feed', 1);
add_action('do_feed_rdf', 'po_disable_feed', 1);
add_action('do_feed_rss', 'po_disable_feed', 1);
add_action('do_feed_rss2', 'po_disable_feed', 1);
add_action('do_feed_atom', 'po_disable_feed', 1);
?>
