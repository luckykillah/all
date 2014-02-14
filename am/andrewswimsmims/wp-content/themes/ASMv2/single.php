<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>
					
					<div id="post-navigation">
						<div class="left">
							<?php previous_post_link('<span class="caps">Previous Post</span> %link'); ?>
						</div>
						<div class="right">
							<?php next_post_link('<span class="caps">Next Post</span> %link'); ?>
						</div> 
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>