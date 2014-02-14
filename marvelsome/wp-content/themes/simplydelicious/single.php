<?php get_header(); ?>

	<div id="content">

		<div class="post-single">

			<h1><?php the_title(); ?></h1>
            <div class="post-featured-image"><?php the_post_thumbnail('featured-image');  ?></div>
            <div class="post-single-details">
                <div class="date"><?php the_time('F jS, Y') ?></div> | <div class="cat" ><?php the_category(',  ') ?> <?php comments_number(' ', '| <a href="#comments">1 Comment</a>', '| <a href="#comments">% Comments</a>' );?></div><!-- /.cat -->
            </div><!-- /.post-single-details -->
            <div class="clear"></div>

			<div class="entry">
	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                <div class="tags"><?php the_tags('Tags: ', ', ', ' '); ?></div>
            </div><!-- /.entry -->

            <div id="posts">
			<?php global $post; $categories = get_the_category();
				foreach ($categories as $category) :
					$posts = get_posts('numberposts=3&category='. $category->term_id.'&exclude='.$post->ID);
					$i=0;
					//Counts posts
					foreach($posts as $post) :
						$i++;
					endforeach;
					
					//Only displays the heading when there are posts
					if ($i != 0) { ?>

						<h3 class="maylike">You may also like:</h3>
					<?php } ?>

					<?php
					foreach($posts as $post) : 
						include("incl/post.php");
                    endforeach;

					break;
               endforeach;
               ?>

			<?php wp_reset_query(); ?>
            </div><!-- /#posts -->

            <?php previous_post_link('<span class="nextPagi">%link</span>'); ?>
            <?php next_post_link('<span class="prevPagi">%link</span>'); ?>


            <?php comments_template(); ?>


        <?php endwhile; else: ?>

        		<p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

        </div><!-- /.post-single -->

    </div><!-- /#content -->

<?php get_footer(); ?>