<?php get_header() ?>

<div id="content" class="index LBF">

<div id="nav-above" class="navigation">
<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts')) ?></div>
<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>')) ?></div>
</div>

<?php while ( have_posts() ) : the_post() ?>

<article id="post-<?php the_ID() ?>" class="post">
	<h2><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
	<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
	<div class="entry-content">
		<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>').''); ?>
		<?php wp_link_pages('before=<div class="page-link">' .__('Pages:') . '&after=</div>') ?>
	</div>
<?php comments_template() ?>
</article><!-- .post -->

<?php endwhile ?>

<div id="nav-below" class="navigation">
	<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts')) ?></div>
	<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>')) ?></div>
</div>

</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>