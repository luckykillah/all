<?php
/**
 * Template Name: Bookmarks
 */
?>
<?php get_header() ?>
	<div id="container">
		
<h2 class="entry-title">Bookmarks</h2>
<?php
//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//$loop = new WP_Query( array(
//'post_type' => 'bookmark',
//'posts_per_page' => 9,
//'orderby'=> 'menu_order',
//'paged'=>$paged
//) ); ?>
<?php if ( ! have_posts() ) : ?>
<p>Sorry, no posts matched your criteria.</p>
<?php while ( have_posts() ) : the_post(); ?>

<?php //query_posts('post_type=bookmark&posts_per_page=-1&paged=>$paged'); ?>
<?php //if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="bookmark">
	<div class="bookmark-content">	
		<h2 class="bookmark-title"><a href="<?php echo get_the_excerpt(); ?>"><?php the_title(); ?></a></h2>
		<blockquote><?php the_content(); ?></blockquote>
	</div>
	<div class="bookmark-image"><?php the_post_thumbnail('thumbnail'); ?></div>
	<div class="entry-meta">
		<?php the_time('d M Y'); ?><br />
		<?php if(get_the_category() != array()){the_category(', '); echo '<br />';} ?>
		<?php the_tags('',', ',''); ?>
	</div>
	<br class="clear" />
</article><!-- .post -->

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous">Next Post link:<?php next_posts_link('&laquo; Older Posts') ?></div>
				<div class="nav-next">Previous Post link:<?php previous_posts_link('&laquo; Newer Posts') ?></div>

 			</div>
<?php get_footer() ?>