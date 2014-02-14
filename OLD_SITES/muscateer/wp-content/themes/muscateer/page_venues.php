<?php
/*
Template Name: Venues Page	
*/
?>

<?php get_header(); ?>

<div id="container">

<!-- <?php
  /*$allposts = get_posts('numberposts=-1&post_type=post&post_status=');

  foreach( $allposts as $postinfo) {
    delete_post_meta($postinfo->ID, 'day');
    delete_post_meta($postinfo->ID, 'date');
    delete_post_meta($postinfo->ID, 'dress');
    delete_post_meta($postinfo->ID, 'location');
    delete_post_meta($postinfo->ID, 'time');
    delete_post_meta($postinfo->ID, 'phone');
    delete_post_meta($postinfo->ID, 'cost');
    delete_post_meta($postinfo->ID, 'email');
    delete_post_meta($postinfo->ID, 'hours');
    delete_post_meta($postinfo->ID, 'website');
  }*/
?> -->

<!-- //////////   CONTENT   \\\\\\\\\\\\\ -->

<div class="all_venues">

  <h2 id="groups-page-title"> All Venues </h2> 
  <ul class="groupjump">
<li><input id="cal0-check" type="checkbox" checked="checked"/> Arts+Culture </li>
		<li><input id="cal1-check" type="checkbox" checked="checked"/> Community</li>
		<li><input id="cal2-check" type="checkbox" checked="checked"/> Food+Drink</li>
		<li><input id="cal3-check" type="checkbox" checked="checked"/> Sports+Exercise</li>
		<li><input id="cal4-check" type="checkbox" checked="checked"/> Nightlife</li>
  </ul>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php query_posts('cat=21,22,23,24,25&orderby=title&order=asc'); ?>	
	
	<?php while (have_posts()) : the_post(); ?>
	<div class="venue_info <?php echo join( ' ', get_post_class( $class = '', $post_id = null ) ) ?>">
		<div class="venue_content">	
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content() ?> 
		</div>
		
	<div class="venue_meta">
		<h3> Important Info: </h3>
		<?php the_meta() ?> 
	</div>	
	</div>		

	<?php endwhile; ?>
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