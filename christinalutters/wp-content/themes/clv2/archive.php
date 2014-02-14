<?php get_header() ?>
	
<div id="main_content" role="main" class="clearfix">
	<section id="main_section" class="section">
	<div class="main_column">
	
		<?php if ( is_day() ) : ?>
		<h2 class="page-title">Daily Archives: <span><?php echo get_the_time(get_option('date_format')) ?></span></h2>
		
		<?php elseif ( is_month() ) : ?>
		<h2 class="page-title">Monthly Archives: <span><?php echo get_the_time('F Y'); ?></h2>
		
		<?php elseif ( is_year() ) : ?>
		<h2 class="page-title">Yearly Archives: <span><?php echo get_the_time('Y'); ?></span></h2>
		
		<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
		<h2 class="page-title">Blog Archives</h2>
		
		<?php endif; ?>

		<?php while ( have_posts() ) : the_post() ?>
		<article id="post-<?php the_ID() ?>" class="post <?php if(get_post_format()) : echo get_post_format(); endif; ?>">
			<h1 class="entry-title">
			<?php $custom = get_post_custom(); $link = $custom[link][0] ?>
				<?php if ($link && get_post_format() =='link'): ?><a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a>
				<?php else: ?><a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			<?php endif; ?>
			</h1>
			
			<div class="body clearfix">
				<?php the_content(); ?>		
			</div>
			<footer class="clearfix">
				<div class="meta cat"><h3>Filed under: </h3><?php echo get_the_category_list(', ') ?></div>
				<div class="meta tag"><?php the_tags('<h3>Tagged</h3>: ', ', ', ''); ?> </div>
				<div class="meta time"><abbr class="published " title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M Y'); ?></abbr></div>
			</footer>
		</article>
		<?php endwhile ?>
	
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts')) ?></div>
			<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>')) ?></div>
		</div>
		
	</div>
	<?php get_sidebar('bookmarks'); ?>
	</section>
</div><!-- #content -->

<?php get_footer() ?>