<?php get_header(); ?>
<div id="content" class="clearfix">
<div id="container">
<h2 class="archive-title">Search Results</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<div class="search-result">
	<ol>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<li><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			<?php the_excerpt() ?> </li>
	<div class="clearfix"></div>	

	<?php endwhile; ?>
	<?php else : ?>
	<?php _e('Oh no, there is nothing here! Try another search or look in the menu above.'); ?>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
</ol> </div>

<script type="text/javascript">

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>

</div>
</div>
<?php get_footer(); ?>
