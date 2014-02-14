<?php
/**
 * Template Name: Bookmarks Page
 */
?>
<?php get_header() ?>
	
<div id="main_content" role="main" class="clearfix">
	<section id="main_section">
		<div class="main_column">
			<section id="links-photo" class="linkslist">
				<h2 class="page-title">The ugly notebook</h2>
					<article id="post-<?php the_ID() ?>" class="clearfix post <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
						<div class="body clearfix">
							<p>Always under renovation, the notes section on this site mostly contains interesting links I've bookmarked for references, but also holds some thoughts I'm keeping on the back burner and photos I've taken. It's a busy place... continue at your own risk.</p>
							<!--<p>This "Journal" is a place for me to store all those things that don't fit in my memory. I think of it as a kind of hideous notebook that is so ugly there's no pressure to put anything good or pretty into but is incredibly useful to have. It's the opposite of a moleskin, where I expect the contents to be in line with the quality of the notebook. This is the notebook that has coffee spilled on it, the pages have gotten crinkled, and the cover is torn.</p>		-->
						</div>
					</article>
			</section>
			<section id="links-photo" class="linkslist">
				<h2 class="page-title">recent photo<span><a href="/photos">view all</a></span></h2>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('tax_query' => array(array('taxonomy' => 'post_format','field' => 'slug','terms' => 'post-format-image','operator' => 'IN')),'posts_per_page' => 1, 'post__in' => get_option('sticky_posts'), 'paged' => $paged); $second_query = new WP_Query( $args ); ?>
				<?php while( $second_query->have_posts() ) : $second_query->the_post(); ?>
					<article id="post-<?php the_ID() ?>" class="clearfix post <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
						<div class="body clearfix">
							<a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
							<h1 class="entry-title"><?php if(get_post_format()=='link') : echo get_post_format(); echo ': '; endif; ?><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_title(); ?></a></h1>
							<?php the_content(); ?>		
						</div>
						<footer class="clearfix">
							<div class="meta cat"><h3>Filed under: </h3><?php echo get_the_category_list(', ') ?></div>
							<div class="meta tag"><?php the_tags('<h3>Tagged</h3>: ', ', ', ''); ?> </div>
							<div class="meta time"><abbr class="published " title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M Y'); ?></abbr></div>
						</footer>
						<p class="right more"><em><a href="/photos" class="CTA">view all photos</a></em></p>
					</article>
				
				<?php endwhile; ?>
			</section>
			
			<section id="links-notes" class="linkslist">
			<h2 class="page-title">Recent Notes <span><a href="">view all</a></span></h2>
				<ol>
				<?php $args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array( 'post-format-link' ),
						'operator' => 'NOT IN'
					)
				),
				'posts_per_page' => '5',
				'post__not_in' => get_option( 'sticky_posts' )
				);
				$queryNotes  = new WP_Query( $args );
			
				while ( $queryNotes -> have_posts() ) : $queryNotes -> the_post() ?>
					<li id="post-<?php the_ID() ?>" class="postlist <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
						<?php $custom = get_post_custom(); $link = $custom[link][0] ?>
						<?php if ($link && get_post_format() =='link'): ?>
						<a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a>
						<?php else: ?>
						<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						<?php endif; ?>
						<a href="<?php the_permalink();?>" class="perma">&bull;</a>
						<?php if (get_post_format() =='quote'): ?>
						<?php the_content(); ?>	
						<?php else: the_excerpt(); endif;?>		
					</li>
					<?php endwhile; rewind_posts(); ?>
				</ol>
			</section>
			
			
			<?php 
			$current_year = date('Y');
			$current_month = date('m');
			$current_week = date('W');
			$args = array(
					'posts_per_page' => -1, 
					'year' => $current_year,
					'monthnum' => $current_month,
					'w' => $current_week,
					'order' => 'DESC'
				); 
			$third_query = new WP_Query( $args ); ?>
			<?php if( $third_query->have_posts() ) : ?>
			<section class="linkslist">
				<h2 class="page-title">This Week's Links</h2>
				<ol>
			<?php while( $second_query->have_posts() ) : $second_query->the_post(); ?>
					<li id="post-<?php the_ID() ?>" class="postlist <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
							<?php if (get_post_meta($post->ID, 'link', true) && get_post_format() =='link'): ?>
							<a href="<?php echo get_post_meta($post->ID, 'link', true);?>" target="_blank"><?php the_title(); ?></a>
							<?php else: ?>
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
							<?php endif; ?>
							<a href="<?php the_permalink();?>" class="perma">&bull;</a>
							<?php //the_excerpt(); ?>
							<?php the_content(); ?>		
						</li>
					<?php endwhile; ?>	
				</ol>
			</section>
			<?php endif; rewind_posts(); ?>
			
			<section id="links-saved" class="linkslist">
				<h2 class="page-title">saved for later</h2>
				<ol>
					<?php tag_list('10', 'more'); ?>
					<?php $feed = instapaper_feed('http://www.instapaper.com/rss/1085306/elD5BBfculb8XF6hSvEnaLhh58c'); if($feed){ echo $feed; }; ?>
				</ol>
			</section>
			<!--<section id="links-sites" class="linkslist">
				<h3>about this journal</h3>
				<p>This "Journal" is a place for me to store all those things that don't fit in my memory, which is most things. It's kind of like a hideous notebook that is so ugly there's no pressure to put anything good or pretty into it. It's the opposite of a moleskin, where I expect the contents to be in line with the quality of the notebook. This is the notebook that has coffee spilled on it, the pages have gotten crinkled, and the cover is torn.</p>
			</section>-->
		</div>
		<?php get_sidebar('bookmarks'); ?>
	</section>
</div><!-- #content -->

<?php get_footer() ?>