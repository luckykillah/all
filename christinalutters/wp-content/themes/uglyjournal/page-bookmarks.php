<?php
/**
 * Template Name: Bookmarks
 */
?>
<?php get_header() ?>
<div id="content" class="clearfix">
	<h2 class="entry-title">Bookmarks</h2>
	<?php query_posts('post_type=bookmark&posts_per_page=10'); if ( ! have_posts() ) : ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID() ?>" class="post">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>
		<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
		<div class="entry-content">
			<?php the_excerpt('Read More <span class="meta-nav">&raquo;</span>'); ?><div class="bookmark-image"><?php the_post_thumbnail('thumbnail'); ?></div>
			<?php wp_link_pages('before=<div class="page-link">' .__('Pages:') . '&after=</div>') ?>
		</div>
		<div class="entry-meta">
			<span class="cat-links">Posted in <?php get_the_category_list(', ') ?></span>
			<?php the_tags(__('<span class="tag-links">Tagged '), ", ", "</span>\n\t\t\t\t\t\n") ?>
			<span class="comments-link"><?php comments_popup_link(__('Leave a Comment'), __('1 Comment'), __('% Comments')) ?></span>
			<?php edit_post_link(); ?>
		</div>
	</article><!-- .post -->
	
	<?php comments_template() ?>
	
	<?php endwhile ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous">Next Post link:<?php next_posts_link('&laquo; Older Posts') ?></div>
				<div class="nav-next">Previous Post link:<?php previous_posts_link('&laquo; Newer Posts') ?></div>
 			</div>

</div><!-- #content -->
<?php get_footer() ?>