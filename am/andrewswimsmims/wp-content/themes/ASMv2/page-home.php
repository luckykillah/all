<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<div id="primary">
	<div id="content" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/map.png" id="map" />
			<div id="card"></div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar('homepage'); ?>
<?php get_footer(); ?>