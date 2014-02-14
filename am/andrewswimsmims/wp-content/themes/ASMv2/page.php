<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<?php the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>