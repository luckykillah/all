<?php get_header() ?>


<?php if ( is_user_logged_in() || get_post_type() != 'personal') { ?>
<div id="content" class="clearfix LBF">
	<?php the_post(); ?>
	<article id="post-<?php the_ID() ?>" class="post <?php if(get_post_format()) : echo get_post_format(); endif; ?><?php if ( in_category( 'work' )) { echo ' work'; } ?>">
		<?php the_post_thumbnail(); ?>
		<?php if(get_post_format() !=='quote') : ?>
		<h1 class="entry-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>"><?php the_title(); ?></a></h1>
		<?php endif; ?>
		<?php if(get_post_format() =='link') : ?><a href="#" class="link_link">Link</a><?php endif; ?>
		<div class="body clearfix">
			<?php if (get_post_meta($post->ID, 'link', true)): ?>
			<a href="<?php echo get_post_meta($post->ID, 'link', true);?>" class="CTA" target="_blank">Visit this site</a><?php endif; ?>
			<?php the_content(); ?>		
		</div>
		<footer class="clearfix">
			<div class="meta cat"><h6>Filed under: </h5><?php echo get_the_category_list(', ') ?></div>
			<div class="meta tag"><?php the_tags('<h6>Tagged</h6>: ', ', ', '<br />'); ?> </div>
			<div class="meta time"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></div>
		</footer>
		<?php edit_post_link('Edit','<span class="edit-link">', '</span>'); ?>
	</article>
		
	<?php wp_link_pages('before=<div class="page-link">' .__('Pages:') . '&after=</div>') ?>		
 	<?php comments_template('', true); ?>
	
	<div id="nav-below" class="navigation">			
		<?php 
		$previouspost = get_previous_post($in_same_cat, $excluded_categories);
		if ($previouspost != null) {echo '<div class="nav-previous">'; previous_post_link('<h6>Older:</h6> %link'); echo '</div>'; }
		$nextpost = get_next_post($in_same_cat, $excluded_categories);
		if ($nextpost != null) { echo '<div class="nav-next">'; next_post_link('<h6>Newer:</h6> %link'); echo '</div>'; } ?>
	</div><!-- #nav-below -->

</div><!-- #content -->

<?php } else { ?>
<div id="content" class="clearfix LBF">
	<article id="post-0" class="post error404">
		<div class="category">
			<h1 class="entry-title">Oh no!</h1></div>
			<div class="entry-content category">
				<p>Apologies! This page seems not to exist. Try using the navigation above. Or would you like to return to the <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">homepage</a>?</p>
			</div>
		</div>
	</article><!-- .post -->
<!-- #content -->
<?php }; //end else ?>
		


<?php get_footer() ?>
