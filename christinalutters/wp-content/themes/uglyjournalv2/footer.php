<footer id="main_footer" class="clearfix">
	<h4><a href="#" id="show_archives">archives and search</a></h4>
	<div id="primary" class="sidebar clearfix">
	<ul class="xoxo">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
		<li id="categories" class="widget clearfix">
			<h3>Categories</h3>
			<ul>
				<?php wp_list_categories('title_li=&hierarchical=1&use_desc_for_title=1') ?>
			</ul>
		</li>

		<li id="archives" class="widget clearfix">
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly') ?>
			</ul>
		</li>	
		
		<li id="tags" class="widget clearfix">
			<h3>Tags</h3>
			<ul>
		<?php		
			$tags = get_tags();
			$html = '';
			foreach ($tags as $tag){
				$tag_link = get_tag_link($tag->term_id);
				//echo '<pre>';
				//print_r($tag);
				//echo '</pre>';
				if ($tag->count > '2'){ 
				$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
				$html .= "{$tag->name} <span>({$tag->count})</span></a></li>";
				}
			}
			echo $html;
			?>			
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/library/js/script.js"></script>
<?php wp_footer(); ?>

</body>
</html>