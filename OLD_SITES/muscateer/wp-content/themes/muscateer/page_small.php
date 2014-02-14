<?php
/*
Template Name: Small Page
*/
?>
<?php get_header(); ?>
<div id="content" class="clearfix">
<div id="container-small">
<div class="page-template">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1 class="page_headline"><?php the_title(); ?></h1>
<br class="clear" />
<?php the_content(); ?>
<br class="clear" />
<?php endwhile; ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>

<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>
</div>

<div id="page-footer-block">
<div id="page-footer">
<?php include (TEMPLATEPATH . "/searchform.php"); ?> <a href="http://www.muscateer.com"><em>back to the main calendar...</em></a><small>copyright 2010, the muscateer</small>
</div></div>


</body>
</html>
