<?php
/**
 * Post Template
 *
 * This is the default post template.  It is used when a more specific template can't be found to display
 * singular views of the 'post' post type.
 *
 * @package Origin
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // origin_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // origin_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // origin_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // origin_open_entry ?>
						
						<div class="post-content">
						
							<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'single-thumbnail', 'link_to_post' => false, 'image_class' => 'featured', 'attachment' => false ) ); ?>
							
							<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

							<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[entry-published] &middot; by [entry-author] &middot; in [entry-terms taxonomy="category" before=""] [entry-edit-link before=" &middot; "]', 'origin' ) . '</div>' ); ?>

							<div class="entry-content">
								
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'origin' ) );$custom = get_post_custom(); echo "<a href=\"" . $custom['url'][0]. "\" target=\"_blank\">Link</a>"; ?>
								
								<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'origin' ), 'after' => '</p>' ) ); ?>
								
							</div><!-- .entry-content -->

							<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="post_tag" before="Tags: "]', 'origin' ) . '</div>' ); ?>

							<?php do_atomic( 'close_entry' ); // origin_close_entry ?>
						
						</div><!-- .post-content -->

					</div><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // origin_after_entry ?>

					<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

					<?php do_atomic( 'after_singular' ); // origin_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // origin_close_content ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // origin_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>