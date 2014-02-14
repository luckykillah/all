<?php get_header() ?>

<div id="content" class="clearfix" class="index">

<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span>') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '<span class="meta-nav">&raquo;</span>') ?></div>
			</div>
<?php 
$args = array(
  'tax_query' => array(
    array(
      'taxonomy' => 'post_format',
      'field' => 'slug',
      'terms' => 'post-format-link'
    )
  )
);
query_posts( $args );
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID() ?>" class="post">
	<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark"><?php echo get_post_format(); ?>: <?php the_title() ?></a></h2>
	<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
	<div class="entry-content">
		<?php the_content('Read More <span class="meta-nav">&raquo;</span>'); ?>
		<?php wp_link_pages('before=<div class="page-link">' .__('Pages:') . '&after=</div>') ?>
	</div>
	<div class="entry-meta">
		<span class="cat-links">Posted in <?php get_the_category_list(', ')) ?></span>
		<?php the_tags(__('<span class="tag-links">Tagged '), ", ", "</span>\n\t\t\t\t\t\n") ?>
		<span class="comments-link"><?php comments_popup_link(__('Leave a Comment'), __('1 Comment'), __('% Comments')) ?></span>
		<?php edit_post_link(); ?>
	</div>
</article><!-- .post -->

<?php comments_template() ?>

<?php endwhile ?>

<div id="nav-below" class="navigation">
<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts')) ?></div>
<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>')) ?></div>
</div>

</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>