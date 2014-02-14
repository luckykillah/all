<!--<div id="sidebar" role="complementary">
		<ul>
			<?php if( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
			<li>
				<?php get_search_form(); ?>
			</li>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li>
		<?php }?> 
		</ul>
</div>
 --------------INSERTED---------------------- -->


<div id="nav">
	<ul>

		<li><a href="#header">Home</a></li>
		<li><a href="#meettheswim">Meet the Swim</a></li>
		<li><a href="#meetme">Meet Me<a/></li>
		<li><a href="#meetthecharities">Meet the Charities</a></li>
		<li> </li>
		<li><a href="http://andrewswimsmims.com/blog">Blog</a></li>
		<li><a href="#footer">Links</a></li>		
		<!--<li id="search">
  			<label for="s"></label>   
    		<form id="searchform" method="get" action="/index.php">
      			<div>
         			<input type="text" name="s" id="s" size="10" /><br />
         			<input type="submit" value="Search" />
      			</div>
     		</form>
     	</li>-->
     	<li id="login"><?php wp_loginout(); ?></li>
	</ul>
</div>

	

