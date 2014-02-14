            <div class="post">

                <div class="post-thumb">
                    <?php if(has_post_thumbnail()) {the_post_thumbnail();} else {echo '<img src="';bloginfo('template_directory');echo '/img/no-thumb.jpg" alt="No Thumbnail Set" width="190" height="120" />';} ?>
                    <div class="caption"><a href="<?php the_permalink() ?>"></a></div>
                </div><!-- /.post-thumb -->

                <div class="post-info">
                    <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                    <div class="post-category"><?php the_category(', ') ?></div><!-- /.post-category -->
                </div><!-- /.post-info -->

            </div><!-- /.post -->