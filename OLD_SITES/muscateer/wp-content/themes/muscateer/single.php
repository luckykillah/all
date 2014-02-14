<?php get_header(); ?>

<div id="container">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>


<!-- //////////   CONTENT   \\\\\\\\\\\\\ -->

<div class="single_content">

	<br class="clear" />
	
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div class="venue_info">
		<div class="venue_content">	
			<h1><?php the_title() ?> </h1> 
			<?php the_content() ?> 
			<p><a href="/contact">Do you have info to add?</a>  |  
			<small> <a href="/all-events">Back to All Events</a> </small></p>
		</div>
	
		
	<div class="post-meta">
		<h3> Important Info: </h3>
		 <?php the_meta() ?>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<h5><a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4bb980057c13258b" class="addthis_button_compact">Share this</a></h5>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4bb980057c13258b"></script>
<!-- AddThis Button END -->


	</div>	
	</div>
	<br class="clear" />	
	<?php endwhile; ?>
	<?php else : ?>
	<?php _e('Sorry, there is nothing here! Try a search.'); ?>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>

	<?php $topic = str_replace( ' ' , '-' , strtolower( sanitize_title( $post->post_title ) ) ); ?>
<?php $topic1 = str_replace( '-' , ' ' , $topic ); ?>
  <?php query_posts('category_name='.$topic.'&posts_per_page=10'); ?>

  <?php if (have_posts()) : ?><h2><?php echo $topic1; ?> Events </h2><?php while (have_posts()) : the_post(); ?>
<div class="entry" id="post-<?php the_ID(); ?>">
	<div id="single-text"><h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div>

		<?php the_meta(); ?>
		<!-- <div class="post-categories"><span class="post-meta-key">similar/ nearby</span> 
		<?php //the_tags(''); ?> </div>-->
		<br class="clear" />

</div>		
  <?php endwhile;?>
<?php endif; ?>	


</div>

<script type="text/javascript">

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>

</div> <!-- end content -->


<?php get_footer(); ?>



</body>
</html>