<?php get_header(); ?>
		<?php if(brunelleschi_option('sidebar') === 'both'){ get_sidebar('secondary'); } ?>
<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'brunelleschi' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'brunelleschi' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>

<?php endwhile; ?>

</div><!-- #main -->

<?php get_footer(); ?>
