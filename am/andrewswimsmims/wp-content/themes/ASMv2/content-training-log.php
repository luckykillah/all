<?php
/**
 * The default template for displaying content
 *
 */
$data = get_post_custom();
$workoutMeta = workoutMeta($data);
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<span class="entry-date"><?php the_date(); ?></span>
		<div class="entry-content<?php if ($workoutMeta['weekTil'] != '?') { echo ' post-log'; }; ?>">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php if (!is_single()): the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); endif; ?>
			<?php if (is_single()): the_content(); if ($workoutMeta['weekTil'] != '?') : get_template_part( 'content', 'workout' ); endif; endif; ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		
		<section class="entry-meta">
		<?php $show_sep = false; ?>
			<?php $categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) ); if ( $categories_list ): ?>
			<span class="cat-links">
				<?php echo $categories_list; ?>
			</span>
			<?php endif; $tags_list = get_the_tag_list( '', __( '', 'twentyeleven' ) ); if ( $tags_list ):?>
			<span class="tag-links">
				<?php echo $tags_list ?>
			</span><br/>
			<?php endif; // End if $tags_list ?>
			
			<!--<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?></span>
			<?php endif; // End if comments_open() ?> -->
		</section>
		
		<?php if ($workoutMeta['weekTil'] != '?') : ?>
		<section class="entry-workout-meta">
			<p class="distance">
				<!-- 
					<?php 
						//print_r($data);
						$currentWeek = date('W', strtotime($data['mon'][0]));
						$currentYear = date('Y', strtotime($data['mon'][0]));
						$nextSwimWeek = date('W', strtotime('2012-6-23')); 
						$nextSwimYear = date('Y', strtotime('2012-6-23'));
						echo 'current week: '.$currentWeek ;
						echo 'current year: '.$currentYear ;
						echo 'next week: '.$nextSwimWeek ; 
						echo 'next year: '.$nextSwimYear ;
						if($currentYear != '1970'){
							if ($nextSwimWeek < $currentWeek && $nextSwimYear == ++$currentYear)   { $weekTil ='-'.(52-$currentWeek)+$nextSwimWeek-1; }
							elseif ($nextSwimWeek > $currentWeek && $nextSwimYear >= $currentYear) { $weekTil ='-'.(52-$currentWeek)+$nextSwimWeek-1; }
							elseif ($nextSwimWeek < $currentWeek && $nextSwimYear <= $currentYear) { $weekTil ='-'; $comment = 'This swim has past!'; }
							elseif ($nextSwimWeek == $currentWeek && $nextSwimYear < $currentYear) { $weekTil ='-'; $comment = 'This swim has past!'; }
							elseif ($nextSwimWeek == $currentWeek && $nextSwimYear == $currentYear){ $weekTil ='0'; $comment = 'This swim is this week!';}
							elseif ($nextSwimWeek == $currentWeek && $nextSwimYear > $currentYear){ $weekTil =52; }
							else { echo 'broken'; }
						}
						echo $weekTil; 			 
					?> 
				-->
 				<?php echo $workoutMeta['weekTotal']; ?><br /><span>km swam</span>
			</p>

			<p class="weeks">
				<?php echo $workoutMeta['weekTil']; ?><br /><span>weeks left</span>
			</p>
			<?php if (!is_single()): ?><a href="<?php the_permalink(); ?>#workout" class="workout-link">View the workout &raquo;</a><?php endif; ?>
		</section><!-- #entry-meta -->
		<?php endif; ?>
		<?php if (is_single()): ?><a href="#" id="toTop">back to top</a><?php endif;?>
	</article><!-- #post-<?php the_ID(); ?> -->
	<?php if (is_single()): ?>
	<div id="post-navigation">
		<div class="left">
			<?php previous_post_link('<span class="caps">Previous Post</span> %link'); ?>
		</div>
		<div class="right">
			<?php next_post_link('<span class="caps">Next Post</span> %link'); ?>
		</div> 
	</div>
	<?php endif; ?>