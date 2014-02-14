<?php get_header(); ?>

	<div id="content">

		<div class="post-page">

			<h1><?php the_title(); ?></h1>

			<div class="entry">
	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div><!-- /.entry -->

        <?php endwhile; else: ?>

        		<p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

        </div><!-- /.post-page -->

    </div><!-- /#content -->

<?php get_footer(); ?>