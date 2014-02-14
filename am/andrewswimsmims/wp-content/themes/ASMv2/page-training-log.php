<?php
/**
 * Template Name: Training Log Template
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
			<?php endif; rewind_posts(); ?>
			
			<?php 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'training-log',
						'paged' => $paged,
						'posts_per_page' => 50,
						'order'=> 'DESC'
						);
					query_posts($args); 
					if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'training-log' ); ?>
				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			<?php //asm_content_nav(''); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar( 'training-log' ); ?>
<br class="clear" />
<?php get_footer(); ?>