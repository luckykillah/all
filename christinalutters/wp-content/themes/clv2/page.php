<?php get_header() ?>

<div id="main_content" role="main" class="clearfix">
	<section id="main_section" class="section">
		<?php the_post() ?>
		<article id="post-<?php the_ID(); ?>" <?php body_class( $class ); ?> >
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="entry-content">
				<?php the_content() ?>
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'la'), "</div>\n", 'number'); ?>
			</div>
			<div class="entry-meta">
				<?php edit_post_link(__('Edit', 'la'),'<span class="edit-link">','</span>') ?>
			</div>
		</article><!-- .post -->
	<br class="clear" />
	<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
	</section>
</div><!-- #content -->

<?php get_footer() ?>