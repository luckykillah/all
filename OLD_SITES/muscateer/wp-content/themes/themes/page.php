<?php get_header(); ?>
<div id="content" class="clearfix">
<?php include (TEMPLATEPATH . "/sidebar2.php"); ?>
<div id="left">
<p id="sidebar_show"><a href="#" id="show_s">&larr; Sidebar</a></p>
<div class="single_content">
<!-- page content -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1 class="page_headline"><?php the_title(); ?></h1>
<div class="clearfix"></div>
<?php the_content(); the_meta(); ?>

<?php comments_template(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
