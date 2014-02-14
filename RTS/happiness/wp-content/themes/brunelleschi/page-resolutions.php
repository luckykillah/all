<?php
/**
 * Template Name: Resolutions
 *
 */

get_header(); ?>
	<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">
<?php
if (substr(get_the_title(), 0, 2) == '20'){
	$tag = substr(get_the_title(), 0, 4);
	$type="yearly-resolutions";
}
else{
	$tag = substr(get_the_title(), 0, -5);
	$type="monthly-resolutions";
}
$categories = get_categories();
foreach ($categories as $cat) {
	if ($cat->cat_ID != 1 && $cat->parent == 0) {
		$cats[] = $cat->name;
	};
};
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content <?= $type; ?>">
		<?php the_content(); ?>
		<dl class="no-indent">
		<?php
		foreach ($cats as $catname) {
		   $catid = get_cat_id($catname);
		   $myquery = new WP_Query(array('cat' => $catid, 'tag' => $tag, 'post_type' => 'goal'));
		   if ($myquery->have_posts()) :
		      echo "<section class='def'><dt><a href='/happiness/category/$catname/'>$catname</a></dt>";
		      while ($myquery->have_posts()) : $myquery->the_post(); ?>
		         <dd>
		         	<a rel="bookmark" href="<?php the_permalink(); ?>"><em><?php the_title(); ?></em></a><br />
		         	<?php //the_content(); ?>
		         </dd>
		      <?php endwhile;
		      echo '</section>';
		   endif;
		}
		
		?>
		<br class="clear" />
		</dl>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
</div><!-- #main -->
	
<?php get_footer(); ?>