<?php
/*
Template Name: Other Calendars Page
*/
?>

<?php get_header(); ?>

<div id="container">

<!-- 
///////////////////////////////////////// 
START CONTENT 
/////////////////////////////////////////  
-->

	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<h1 style="float:left; margin-top: -5px"><?php the_title(); ?></h1> <small> &nbsp; <a href="#">back to main calendar</a> </small> 
	<div class="title-search" style="position: relative; clear: both;"><?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<small>click on a day to view events or click to  <a href="javascript:parentAccordion.pr(1)">Show all days</a> or <a href="javascript:parentAccordion.pr(-1)">hide all days</a></small></div>
	<?php the_content(); ?>

	<?php endwhile; ?>
	
	<?php else : ?>
	<?php _e('Sorry, there is nothing here! Try a search.'); ?>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/style/js/script.js"></script>

<script type="text/javascript">

	var parentAccordion=new TINY.accordion.slider("parentAccordion");
	parentAccordion.init("compprop0","h3",0,1);

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>
</div> 

<!-- 
///////////////////////////////////////// 
END CONTENT 
/////////////////////////////////////////  
-->


<?php get_footer(); ?>



</body>
</html>