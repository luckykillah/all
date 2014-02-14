<?php get_header() ?>

<div id="content" class="clearfix photos LBF">

<section class="recent-posts">
<h2 class="page-title">photos</h2>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('tax_query' => array(array('taxonomy' => 'post_format','field' => 'slug','terms' => 'post-format-image','operator' => 'IN')),'posts_per_page' => 1, 'post__in' => get_option('sticky_posts'), 'paged' => $paged); $second_query = new WP_Query( $args ); ?>
<?php while( $second_query->have_posts() ) : $second_query->the_post(); ?>
	<article id="post-<?php the_ID() ?>" class="post <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
		<h1 class="entry-title"><?php if(get_post_format()=='link') : echo get_post_format(); echo ': '; endif; ?><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_title(); ?></a></h1>
		<?php if(get_post_format() =='link') : ?><a href="#" class="link_link">Link</a><?php endif; ?>
		<div class="body clearfix">
			<?php if (get_post_meta($post->ID, 'link', true) && get_post_format() =='link'): ?>
			<a href="<?php echo get_post_meta($post->ID, 'link', true);?>" class="CTA" target="_blank">Visit this site</a><?php endif; ?>
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>		
		</div>
		<footer class="clearfix">
			<div class="meta cat"><h6>Filed under: </h5><?php echo get_the_category_list(', ') ?></div>
			<div class="meta tag"><?php the_tags('<h6>Tagged</h6>: ', ', ', '<br />'); ?> </div>
			<div class="meta time"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
		</footer>
	</article>

<?php endwhile; ?>

<section>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('tax_query' => array(array('taxonomy' => 'post_format','field' => 'slug','terms' => 'post-format-image','operator' => 'IN')),'posts_per_page' => 12, 'post__not_in' => get_option('sticky_posts'), 'paged' => $paged); query_posts( $args ); ?>
<?php while ( have_posts() ) : the_post() ?>	
	<article id="post-<?php the_ID() ?>" class="post <?php if(get_post_format()) : echo get_post_format(); endif; ?> grid">
		<h1 class="entry-title"><?php if(get_post_format()=='link') : echo get_post_format(); echo ': '; endif; ?><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_title(); ?></a></h1>
			<div class="body clearfix">
			<a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_post_thumbnail(); ?></a>		
		</div>
		<footer class="clearfix">
			<div class="meta cat"><h6>Filed under: </h5><?php echo get_the_category_list(', ') ?></div>
			<div class="meta tag"><?php the_tags('<h6>Tagged</h6>: ', ', ', '<br />'); ?> </div>
			<div class="meta time"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
		</footer>
	</article>
<?php endwhile; ?>
</section>	
	
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older photos')) ?></div>
		<div class="nav-next"><?php previous_posts_link(__('Newer photos <span class="meta-nav">&raquo;</span>')) ?></div>
	</div>
</section>

<?php wp_reset_postdata(); get_footer() ?>