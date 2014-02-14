<?php
/*
Template Name: Groups Page	
*/
?>

<?php get_header(); ?>

<div id="container">


<!-- //////////   CONTENT   \\\\\\\\\\\\\ -->

<div class="all_groups">

  <h2 id="groups-page-title"> All Groups </h2>
  <ul class="groupjump">
<li><input id="cal0-check" type="checkbox" checked="checked"/> Arts+Culture </li>
		<li><input id="cal1-check" type="checkbox" checked="checked"/> Community</li>
		<li><input id="cal2-check" type="checkbox" checked="checked"/> Food+Drink</li>
		<li><input id="cal3-check" type="checkbox" checked="checked"/> Sports+Exercise</li>
		<li><input id="cal4-check" type="checkbox" checked="checked"/> Nightlife</li>
  </ul>
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  <?php query_posts('cat=15,16,17,18,19&orderby=title&order=asc'); ?>	
	
	<?php while (have_posts()) : the_post(); ?>
	<div class="venue_info <?php echo join( ' ', get_post_class( $class = '', $post_id = null ) ) ?>">
		<div class="venue_content">	
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt() ?> 
		</div>
		
	<div class="venue_meta">
		<h3> Important Info: </h3>
		<?php the_meta() ?>
	</div>	
	</div>
 <br class="clear" />

	<?php endwhile; ?>
</div>

<br class="clear">
</div>

<script type="text/javascript">

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>

</div> <!-- end content -->


<?php get_footer(); ?>



</body>
</html>