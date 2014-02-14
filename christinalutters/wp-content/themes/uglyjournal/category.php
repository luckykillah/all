<?php get_header() ?>
	
<div id="content" class="clearfix" class="index">

<div id="nav-above" class="navigation">
	<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span>') ?></div>
	<div class="nav-next"><?php next_post_link('%link', '<span class="meta-nav">&raquo;</span>') ?></div>
</div>
<h2 class="page-title"><span><?php echo substr(get_category_parents($cat, TRUE, ' &raquo; '), 0, -8); ?>
<?php //single_tag_title(); ?></span></h2>

<?php while ( have_posts() ) : the_post() ?>
	<article id="post-<?php the_ID() ?>" class="post">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark">
			<?php if(get_post_format()) : ?><span class="archive-<?php echo get_post_format(); ?>"><?php the_title() ?></span>
			<?php else : the_title(); endif; ?>
		</a></h2>
		<?php foreach((get_the_category()) as $category) { $pcat = $category->term_id; ?> <span class=" cat c<?php echo $pcat; ?>"></span> <?php } ?>	
		<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
		<?php edit_post_link('edit', ' <p class="edit-post"> (', ')</p>'); ?>
		<?php if ( !in_category(array( 174,198,192,185,179)) && !has_post_format('quote') ) : //don't show excerpt if it's a snippet or a quote ?>
			<div class="entry-content"><?php the_excerpt('Read More <span class="meta-nav">&raquo;</span>'); ?></div>
		<?php endif; ?>
		<?php if ( has_post_format('quote') ) : //show full quote if quote ?>
			<div class="entry-content"><?php the_content(); ?></div>
		<?php endif; ?>
			<!--<span class="cat-links">Posted in <?php echo get_the_category_list(', ') ?></span>-->
	</article><!-- .post -->
<?php endwhile ?>

<div id="nav-below" class="navigation">
<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts')) ?></div>
<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>')) ?></div>
</div>

</div><!-- #content -->

<script>
$("hideImages").click(function(){
	$(".bookmark-image").hide(); 
	}
</script>

<?php get_sidebar() ?>
<?php get_footer() ?>