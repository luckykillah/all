<footer class="clearfix">
	<div id="primary" class="sidebar clearfix">
	<ul class="xoxo">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
		<li id="categories" class="widget clearfix">
			<h3><?php _e('Categories', 'la'); ?></h3>
			<ul>
				<?php wp_list_categories('title_li=&hierarchical=1&use_desc_for_title=1') ?>
			</ul>
		</li>

		<li id="archives" class="widget clearfix">
			<h3><?php _e('Archives', 'la') ?></h3>
			<ul>
				<?php wp_get_archives('type=monthly') ?>
			</ul>
		</li>	
		<li id="search" class="widget clearfix">
			<h3><label for="s"><?php _e('Search', 'la') ?></label></h3>
			<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
				<div>
					<input id="s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" tabindex="1" />
					<input id="searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'la') ?>" tabindex="2" />
				</div>
			</form>
		</li>
	
<?php endif; ?>
	</ul>
	</div>
	<p><span class="small">&copy;</span><?php print(date(Y)); ?> <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">Christina Lutters</a>. All rights reserved.</p>
</footer>
</div><!-- #wrapper .hfeed -->

<?php wp_footer(); ?>

</body>
</html>