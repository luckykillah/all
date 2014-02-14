<?php get_header(); ?>


 <div id="content">


     <div id="featured">

             <!-- If home page, show featured image, if not... don't show anything -->

             <?php if(! $paged || $paged < 2) :  ?>
                  <?php if (have_posts()) :  ?>
                      <?php query_posts('showposts=1'); while (have_posts()) : the_post();  ?>

                                                 <a href="<?php the_permalink() ?>" title="<?php echo get_the_excerpt(); ?>"><?php the_post_thumbnail('featured-image');  ?></a>
                                                  <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                                  <div class="featured-cat"><?php the_category(', ') ?></div>
                                                  <div class="featured-info">
                                                        <?php $myExcerpt = get_the_excerpt(); $tags = array("<p>", "</p>"); $myExcerpt = str_replace($tags, "", $myExcerpt); echo $myExcerpt; ?>
                                                        <a href="<?php the_permalink() ?>">Continue Reading</a>
                                                  </div><!-- /.featured-info -->

                      <?php endwhile;?>
                      <?php wp_reset_query(); ?>
                  <?php endif; ?>
            <?php endif; ?>

    </div><!-- /#featured -->


    <div id="posts">

        <!-- If home page show 9 thumbs with an offset of 1 -->


        <?php if(! $paged || $paged < 2) :  ?>


                <?php  if (have_posts()) : ?>

                      <?php query_posts('posts_per_page=9&offset=1'); while ( have_posts() ) : the_post(); ?>

                                <?php include("incl/post.php"); ?>

                      <?php endwhile;?>
                      <?php wp_reset_query(); ?>

                <?php endif; ?>


         <!-- If other, be normal, there is a known bug here -->

         <?php else : ?>


                <?php  if (have_posts()) : ?>

                      <?php while ( have_posts() ) : the_post(); ?>

                                <?php include("incl/post.php"); ?>

                      <?php endwhile;?>
                      <?php wp_reset_query(); ?>
                <?php endif; ?>


        <?php endif; ?>
    


        <div id="browsing">
            <div class="browse-nav">
                <div class="browse-left"><?php previous_posts_link('previous') ?>&nbsp;</div><!-- /.browse-left -->
                <div class="browse-mid"><div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div></div><!-- /.browse-mid -->
                <div class="browse-right"><?php next_posts_link('next') ?>&nbsp;</div><!-- /.browse-right -->
            </div><!-- /.browse-nav -->
            <div class="clear"></div>
        </div><!--  /#browsing -->

    </div><!-- /#posts -->
</div><!-- /#content -->

<?php get_footer(); ?>