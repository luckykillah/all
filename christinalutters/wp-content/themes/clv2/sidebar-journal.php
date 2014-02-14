<section id="sidebar_journal" class="clearfix">
	<!--<h4><a href="#" id="show_archives">archives and search</a></h4>-->
	<h2>recent links</h2>
	<div class="sidebar clearfix">
				<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
		$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => 'post-format-link',
						'operator' => 'IN')
						),
					'posts_per_page' => 20, 
					'post__not_in' => get_option('sticky_posts'), 
					'paged' => $paged
				); 
				query_posts( $args ); 
		?>
		<?php while ( have_posts() ) : the_post() ?>
			<article id="post-<?php the_ID() ?>" class="post <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
				<h1 class="entry-title"><a href="<?php echo get_post_meta($post->ID, 'link', true);?>" title="Link to <?php the_title() ?>"><?php the_title(); ?></a></h1>
				<?php if(get_post_format() =='link') : ?><a href="#" class="link_link">Link</a><?php endif; ?>
				<div class="body clearfix">
					<?php if (get_post_meta($post->ID, 'link', true) && get_post_format() =='link'): ?>
					<?php //the_post_thumbnail(); ?>
					<?php //the_excerpt(); ?>		
				</div>
				<footer class="clearfix">
					<div class="meta cat"><h6><img src="/wp-content/themes/clv2/library/images/folder.png" alt="Filed under: " /></h5><?php echo get_the_category_list(', ') ?></div>
					<div class="meta tag"><?php the_tags('<h6><img src="/wp-content/themes/clv2/library/images/tag.png" alt="Tagged: " /></h6>', ', ', '<br />'); ?> </div>
					<!--<div class="meta time"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M Y'); ?></abbr></div>-->
					<?php endif; ?>
					<br class="clear" />
				</footer>
			</article>
		<?php endwhile ;?>
	</div>
</section>