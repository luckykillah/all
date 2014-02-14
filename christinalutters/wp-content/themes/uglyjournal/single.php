<?php get_header() ?>


<?php if ( is_user_logged_in() || get_post_type() != 'personal') { ?>
<div id="content" class="clearfix LBF">
	<?php the_post(); ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span>') ?></div>
		<div class="nav-next"><?php next_post_link('%link', '<span class="meta-nav">&raquo;</span>') ?></div>
	</div>

	<div id="post-<?php the_ID(); ?>" class="post clearfix">
				<?php if(the_post_thumbnail()): ?>
		<div class="full-photo">
			<span class="photo-credit">&copy; <?php the_time('Y'); ?> <?php the_author(); ?></span>
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<?php if ( !has_post_format( 'quote' )) { ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php } ?>
		<div class="entry-meta">
			<span class="bigdate entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M Y'); ?></abbr></span>
			<?php printf(__('%6$s%7$s'),
				'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
				get_the_time('Y-m-d'),
				get_the_time('H:i:sO'),
				the_date('', '', '', false),
				get_the_time(),
				get_the_category_list(', '),
				get_the_tag_list(' '.__('and tagged').' ', ', ', ''),
				get_permalink(),
				wp_specialchars(get_the_title(), 'double'),
				comments_rss() ) ?>

				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
					<br /><a class="comment-link" href="#respond" title="Post a comment">Comment</a>
				<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
					Leave a trackback: <a class="trackback-link" href="<?php echo get_trackback_url(); ?>" title="Trackback URL for your post" rel="trackback">Trackback URL</a>
				<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
					<br /><a class="comment-link" href="#respond" title="Post a comment">Comment</a>
				<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
				<?php endif; ?>
				<br />
			<?php edit_post_link('Edit','<span class="edit-link">', '</span>'); ?>
		</div>
		<div class="entry-content">
			<?php the_content(); ?>
			<!--<?php if ( has_post_format( 'link' )) { ?>
				<a href="<?php the_excerpt(); ?>"><?php the_excerpt(); ?></a>
			<?php } ?>-->
			<?php if ( has_post_format( 'link' )) { ?>
				<em>link:</em> <a href="<?php $link = get_post_custom_values('link'); echo $link[0]; ?>" target="_blank"><?php the_title(); ?></a>
			<?php } ?>
			<?php wp_link_pages('before=<div class="page-link">' .__('Pages:') . '&after=</div>') ?>
		</div>
	</div><!-- .post -->
			
 	<?php comments_template('', true); ?>
	<div id="nav-below" class="navigation">			

	<?php $previouspost = get_previous_post($in_same_cat, $excluded_categories);
		
			if ($previouspost != null) {
		
		echo '<div class="nav-previous">';
			previous_post_link('<h6>Older:</h6> %link');
		//echo '<div class="nav-excerpt"><p>';
		//	previous_post_excerpt();
		//echo '</p></div>';
		echo '</div>';
		 } ?>

			<?php 
		$nextpost = get_next_post($in_same_cat, $excluded_categories);
		if ($nextpost != null) {
		
		echo '<div class="nav-next">';
		next_post_link('<h6>Newer:</h6> %link');
		//echo '<div class="nav-excerpt"><p>';
		//next_post_excerpt();
		//echo '</p></div>';
		echo '</div>';
		 } ?>
		</div><!-- #nav-below -->
	</div><!-- #content -->

<?php } else { ?>
<div id="content" class="clearfix LBF">
	<article id="post-0" class="post error404">
		<div class="category">
			<h2 class="entry-title">Oh no!</h2></div>
			<div class="entry-content category">
				<p>Apologies! This page seems not to exist. Try using the navigation above. Or would you like to return to the <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">homepage</a>?</p>
			</div>
		</div>
	</article><!-- .post -->
<!-- #content -->
<?php }; //end else ?>
		


<?php get_footer() ?>
