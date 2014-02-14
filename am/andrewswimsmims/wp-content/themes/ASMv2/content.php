<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<span class="entry-date"><?php the_date(); ?></span>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php if (is_category() || is_tag()): the_excerpt(); else : the_content(); endif; ?>
		</div><!-- .entry-summary -->
		
	<section class="entry-meta">
		<?php $show_sep = false; ?>
			<?php $categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) ); if ( $categories_list ): ?>
			<span class="cat-links">
				<?php echo $categories_list; ?>
			</span>
			<?php endif; $tags_list = get_the_tag_list( '', __( '', 'twentyeleven' ) ); if ( $tags_list ):?>
			<span class="tag-links">
				<?php echo $tags_list ?>
			</span><br/>
			<?php endif; // End if $tags_list ?>
			
			<!--<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?></span>
			<?php endif; // End if comments_open() ?> -->
		</section>
	</article><!-- #post-<?php the_ID(); ?> -->
