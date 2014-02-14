<?php get_header(); ?>

<div id="content">

<h1><?php // WordPress custom title script

                    // is the current page a tag archive page?
                    if (function_exists('is_tag') && is_tag()) {

                    	// if so, display this custom title
                    	echo 'Tag Archive for &quot;'.$tag.'&quot;';

                    // or, is the page an archive page?
                    } elseif (is_archive()) {

                    	// if so, display this custom title
                        echo '';wp_title('');
                        echo ' ';

                    // or, is the page a search page?
                    } elseif (is_search()) {

                    	// if so, display this custom title
                    	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';

                    // or, is the page a single post or a literal page?
                    } elseif (!(is_404()) && (is_single()) || (is_page())) {

                    	// if so, display this custom title
                    	wp_title(''); echo ' - ';

                    // or, is the page an error page?
                    } elseif (is_404()) {

                    	// yep, you guessed it
                    	echo 'Not Found - ';

                    }

                    ?></h1>


        <div id="posts">

       <?php if (have_posts()) :   ?>
       <?php while (have_posts()) : the_post(); ?>

            <?php include("incl/post.php"); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

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