<?php
/**
 * Template Name: Training Log
 * The Template for displaying single training log posts.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'training-log' ); ?>
				<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>