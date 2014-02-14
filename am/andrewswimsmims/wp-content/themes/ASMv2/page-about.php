<?php
/**
 * Template Name: About Page Template
 * The template for displaying all About pages.
 *
 */

get_header(); ?>
<?php get_sidebar('about'); ?>
		<div id="primary">
			<div id="content" role="main">
				<?php the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<br class="clear" />
<?php get_footer(); ?>