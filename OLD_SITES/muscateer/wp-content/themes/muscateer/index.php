<?php get_header(); ?>

<!-- 
///////////////////////////////////////// 
START INDEX.php 
/////////////////////////////////////////  
-->

<div id="container">
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
		</div>

	<?php endwhile; ?>

	<?php if (next_posts_link() || previous_posts_link()): ?>
		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
	<?php endif ?>
	
<?php else : ?>

	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

<?php endif; ?>

</div>

<script type="text/javascript">

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>


<!-- //////////   END INDEX.php   \\\\\\\\\\\\\ -->

<?php get_footer(); ?>
