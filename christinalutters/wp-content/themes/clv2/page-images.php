<?php
/**
 * Template Name: Images
 */
?>
<?php get_header() ?>

<div id="main_content" role="main" class="clearfix">

<section class="recent-posts">
<h2 class="page-title">post images</h2>

<!--<section>-->
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('tax_query' => array(array('taxonomy' => 'post_format','field' => 'slug','terms' => 'post-format-link','operator' => 'IN')),'posts_per_page' => -1, 'post__not_in' => get_option('sticky_posts'), 'paged' => $paged); query_posts( $args ); ?>
<?php while ( have_posts() ) : the_post() ?>	
	<?php $img = get_post_meta($post->ID, 'image_url', true); ?>
	<?php if ($img) : ?><article><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><img src="<?php echo $img; ?>" /><span><?php the_title(); ?></span></a></article><?php endif; ?>
	<?php if (has_post_thumbnail()) : ?><article><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_post_thumbnail(); ?><span><?php the_title(); ?></span></a></article><?php endif; ?>
<?php endwhile; ?>
<!--</section>	-->
	
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older photos')) ?></div>
		<div class="nav-next"><?php previous_posts_link(__('Newer photos <span class="meta-nav">&raquo;</span>')) ?></div>
	</div>
</section>
</div>
<?php wp_reset_postdata(); get_footer() ?>