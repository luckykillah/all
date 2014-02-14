<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>

<div id="main" class="one-column twelvecol last" role="main">

<?php 
if ( have_posts() ) while ( have_posts() ) : the_post(); 

 wp_list_categories('title_li=&show_count=0');

endwhile; 
?>
</div><!-- #main -->

<?php get_footer(); ?>