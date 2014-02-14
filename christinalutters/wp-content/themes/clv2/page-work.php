<?php
/**
 * Template Name: Work
 */
?>
<?php get_header() ?>

<div id="main_content" role="main" class="clearfix">
	<section id="main_section" class="section workslist">
	<nav id="nav-posts">
		<span class="caps">Currently viewing <em id="view">all work</em></span> 
		<em class="right"><a href="#" id="des-only">designed </a> <span class="small">//</span> <a href="#" id="dev-only">developed </a> <span class="small">//</span> <a href="#" id="view-all">view all</a></em>
	</nav>
	<?php 
	$args = array( 'post_type' => 'project', 'posts_per_page' => -1, 'orderby'=>'date', 'order'=>'DESC' ); $loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$link = get_post_meta($post->ID, 'link', true); 
		$img_url_1 = get_post_meta($post->ID, 'image_url_1', true);
		$img_url_2 = get_post_meta($post->ID, 'image_url_2', true);
		$img_url_3 = get_post_meta($post->ID, 'image_url_3', true);
		$responsibilities = get_post_meta($post->ID, 'responsibilities', true);
		$launch = get_post_meta($post->ID, 'launch', true);
	?>
		<article class="section_work clearfix post <?php $tags = get_the_tags(); foreach($tags as $tag){ echo $tag->slug.' '; };?>">
			<div class="gallery right">
				<img alt="Screenshot of <?php the_title(); ?>" src="<?php echo $img_url_1; ?>" />
				<?php if ($img_url_2) : ?><img class="half" alt="Screenshot of <?php the_title(); ?>" src="<?php echo $img_url_2; ?>" /><?php endif; ?>
				<?php if ($img_url_3) : ?><img class="half last" alt="Screenshot of <?php the_title(); ?>" src="<?php echo $img_url_3; ?>" /><?php endif; ?>
			</div>
			<h1 class="caption"><a href="http://<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></h1>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<p><a href="http://<?php echo $link; ?>" target="_blank">View the site</a></p>
			<footer>
				<?php if($responsibilities) : ?><div class="meta"><h3>Responsibilities: </h3><?php echo $responsibilities; ?></div><?php endif; ?>
				<?php if($launch) : ?><div class="meta"><h3>Launch: </h3><?php echo $launch; ?></div><?php endif; ?>
			</footer>

			<!--<p class="large"><em>The Charcoal Project is an organization tackling the far-ranging consequences of energy poverty through the promotion of clean and sustainable energy solutions.</em></p>
			<p><a href="" target="_blank">View site.</a></p>
			<p>I have been continuously involved with TCP as it's CIO since 2009. We recently realigned the blog to better reflect the changes and rapid growth of the organization over the past year.</p>
			<p>The site is powered by Wordpress 3.0 and uses HTML5 and CSS3. </p>
			<footer class="meta">
				<p><span class="meta_title">Responsibilities: </span>logo, design, <span class="caps">HTML/CSS</span>, <span class="caps">JS</span>/jQuery, Wordpress <span class="caps">CMS</span>, Google Maps/Charts <span class="caps">API</span></p>
				<p><span class="meta_title">Launch: </span>2010 <span class="amp">&amp;</span> 2011</p>
			</footer>
			-->
		</article>
		
		<?php endwhile; ?>
		
	</section>
</div>



<?php get_footer() ?>