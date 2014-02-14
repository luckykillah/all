

<section id="sidebar_bookmarks" class="clearfix">
	<!--<h4><a href="#" id="show_archives">archives and search</a></h4>-->
	<div class="sidebar clearfix">
		
		<section id="links-design" class="linkslist closed">
			<h3>design links</h3>
			<ol>
				<?php cat_list('IN','10', 'media'); ?>
			</ol>
		</section>
		
		<section id="links-htmlcss" class="linkslist closed">
			<h3>html / css links</h3>
			<ol>
				<?php cat_list('IN','10', 'htmlcss'); ?>
			</ol>
		</section>
		<section id="links-wordpress" class="linkslist closed">
			<h3>wordpress resources</h3>
			<ol>
				<?php cat_list('','10', 'wordpress-code-2'); ?>
			</ol>
		</section>
		
		<section id="links-drupal" class="linkslist closed">
			<h3>drupal resources</h3>
			<ol>
				<?php cat_list('','10', 'drupal'); ?>	
			</ol>
		</section>
		<section id="links-sites" class="linkslist closed">
			<h3>design resources</h3>
			<ol>
				<?php cat_list('IN','10','resources'); ?>
			</ol>
		</section>
		<section id="tags" class="widget clearfix half open">
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
				$html .= "{$tag->name} <span>{$tag->count}</span></a></li>";
				}
			}
			echo $html;
			?>			
			</ul>
		</section> 

		<section id="categories" class="widget clearfix half open">
			<h3>Files</h3>
			<ul>
			<?php if (is_category()) { $this_category = get_category($cat); $cat_id = get_category($cat)->term_id; } ?>
			<?php 
				/*if($this_category->category_parent): $this_category = wp_list_categories('orderby=id&depth=1&show_count=0&title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.'&echo=0&exclude='.$cat_id); 
				else : //$this_category = wp_list_categories('orderby=id&depth=0&show_count=0&title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID."&echo=0");
				$this_category = '<li>No categories</li>';
				endif; 
				if ($this_category !== '<li>No categories</li>') :
					$curr = get_category($cat)->name;
					$cat_parent = get_category($cat)->category_parent;
					$curr_parent = get_category($cat_parent)->name;
					$cat_parent2 = get_category($cat_parent)->category_parent;
					$curr_parent2 = get_category($cat_parent2)->name;
					$cat_parent3 = get_category($cat_parent2)->category_parent;
					$curr_parent3 = get_category($cat_parent3)->name;
					echo '<pre>';
					print_r(get_category($cat_parent));
					echo '</pre>';
					echo '<li><em>'.$curr_parent2.' > <br />'.$curr_parent.' > <br />'.$curr.': </em>';
					echo $this_category; 
					echo '</li><li>&nbsp;</li>';
					endif;
				 */?> 
				 <?php wp_list_categories('title_li=&hierarchical=1&use_desc_for_title=1&depth=0&exclude=309') ?>
			</ul>
		</section>

		<section id="archives" class="widget clearfix half open">
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly') ?>
			</ul>
		</section>	
				
		<section id="search" class="widget clearfix">
			<h3><label for="s"><?php _e('Search', 'la') ?></label></h3>
			<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
				<div>
					<input id="s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" tabindex="1" />
					<input id="searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'la') ?>" tabindex="2" />
				</div>
			</form>
		</section>
	</div>
</section>