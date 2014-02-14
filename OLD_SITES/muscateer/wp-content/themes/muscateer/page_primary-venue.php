<?php
/*
Template Name: Primary Venue
*/
?>
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
		</div>
	
		
	<div class="venue_meta">
		<h3> Important Info: </h3>
		 <?php the_meta() ?>

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
<h2> Venues at the <?php echo $topic1; ?> </h2>
  <?php query_posts('category_name='.$topic.'&posts_per_page=10'); ?>
  <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
<div class="entry" id="post-<?php the_ID(); ?>">
	<div id="single-text"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
		<?php the_content(); ?>
	</div>
		<?php the_meta(); ?>
		<!-- <div class="post-categories"><span class="post-meta-key">similar/ nearby</span> 
		<?php //the_tags(''); ?> </div>-->
		<br class="clear" />
</div>
<br class="clear" />			
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