<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */
?>
<div id="sidebar">
	<div id="upcoming" class="sidebar-box">
		<h2 class="only"> <a href="http://www.muscatswimming.com/home">Home</a></h2>
	</div>
	<div class="sidebar-box">
		<h2 class="only"> <a href="http://www.muscatswimming.com/about">About &amp; Contact</a></h2>
	</div>
	<div class="sidebar-box">
		<h2> <a href="http://www.muscatswimming.com/category/events">Events</a></h2>
		<?php query_posts('category_name=events'); ?>
		<?php if (have_posts()) : ?><p><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br />
		<?php endwhile; ?></p>
		<?php else : ?>
			<p>Sorry, but there are no upcoming events, check back soon!</p>
		<?php endif; ?>

	</div>
	<div class="sidebar-box">
		<h2> <a href="http://www.muscatswimming.com/category/results">Results</a></h2>
		<?php query_posts('category_name=results&showposts=3'); ?>
		<?php if (have_posts()) : ?><p><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br />
		<?php endwhile; ?></p>
		<?php else : ?>
			<p>Sorry, but there are no past results posted yet, check back soon!</p>
		<?php endif; ?>

	</div>
	<div class="sidebar-box">
		<h2> <a href="http://www.muscatswimming.com/category/news">News</a></h2>
		<?php query_posts('category_name=news&showposts=3'); ?>
		<?php if (have_posts()) : ?><p><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br />
		<?php endwhile; ?></p>
		<?php else : ?>
			<p>Sorry, but there is no news posted yet, check back soon!</p>
		<?php endif; ?>

	</div>
	<div id="upcoming" class="sidebar-box">
		<h2 class="only"> <a href="http://www.muscatswimming.com/category/beaches">Beaches of Oman</a></h2>
	</div>

<!--<div class="sidebar-box">
		<h2> <a href="#">Test</a></h2>
		<?php query_posts('category_name=uncategorized&showposts=3'); ?>
		<?php if (have_posts()) : ?><p><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br />
		<?php endwhile; ?></p>
		<?php else : ?>
			<p>Sorry, but there are no tests posted yet, check back soon!</p>
		<?php endif; ?>
		</div> -->
	</div> 
	
	
	<!-- <div id="upcoming" class="sidebar-box">
		<h2> Upcoming Events</h2>
		<?php query_posts('category_name=upcoming'); ?>
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<?php endwhile; ?>
		<?php else : ?>
			<p>Sorry, but there are no upcoming events, check back soon!</p>
		<?php endif; ?>
	</div>
	
	<div id="results" class="sidebar-box">
		<h2> Past Results</h2>
		<?php query_posts('category_name=upcoming&showposts=3'); ?>
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<?php endwhile; ?>
		<?php else : ?>
			<p>Sorry, but there are no past results posted yet, check back soon!</p>
		<?php endif; ?>
	</div>
	
	<div class="sidebar-box">
		<h2> Test</h2>
		<?php query_posts('category_name=uncategorized&showposts=3'); ?>
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		<?php endwhile; ?>
		<?php else : ?>
			<p>Sorry, but there are no tests posted yet, check back soon!</p>
		<?php endif; ?>
	</div>
		
</div> -->
<br class="clear" />