<?php
/*
Template Name: Calendar
*/
?>

<?php get_header(); ?>

<div id="container">

<!-- 
///////////////////////////////////////// 
START CONTENT 
/////////////////////////////////////////  
-->
	
	<div id="welcome">
			<div id="welcome-text">
			<h2> Welcome <small>to the </small> Muscateer </h2>
				<p>The Muscateer is helping Oman's residents and visitors easily find things to do in the capital. The Muscateer is a hard worker, but he's not done yet. Poke around, then tell him if you like the site and what he could do to make it more useful for you. He's always adding new events, so keep checking back!<p>
<!--[if IE]>
<p style="color: #ef7050"> *It looks like you're viewing this site with Internet Explorer (the browser, or program, you use to view websites). There are still some IE-specific bugs (like the menu) that The Muscateer is trying to exterminate. The Muscateer suggest a new browser, such as <a href="http://www.mozilla.com/en-US/firefox/personal.html" style="color: #666">Firefox</a>, <a href="http://www.apple.com/safari/download/" style="color: #666">Safari</a> or <a style="color: #666" href="http://www.google.com/chrome">Chrome</a>. (They're free, safer and they make websites prettier! <a style="color: #666;" href="http://opentochoice.org/en/">Learn more.</a> You'll be glad you did.) If a new browser isn't possible for you, please bear with him while he runs to the shop for some ant traps.</p><![endif]-->

<p> <em> Where to go from here? </em> <br />
-- click on a date below to view the events for that day, or <a href="javascript:parentAccordion.pr(1)">show all</a> to see all events for the next two weeks<br />
-- toggle the calendar categories shown using the key to the right<br />
-- <a href="/list-event">tell</a> The Muscateer about an event that's missing, fill out his <a href="/feedback">survey</a> or <a href="/contact">contact him</a> directly to tell him what you think of the site!<br />
</p>
				
			</div>
	</div>
<div id="key">
<h3>Calendar categories</h3>
	<ul>
		<li class="cal0key"><input id="cal0-check" type="checkbox" checked="checked"/> Arts+Culture </li>
		<li class="cal1key"><input id="cal1-check" type="checkbox" checked="checked"/> Community</li>
		<li class="cal2key"><input id="cal2-check" type="checkbox" checked="checked"/> Food+Drink</li>
		<li class="cal3key"><input id="cal3-check" type="checkbox" checked="checked"/> Sports+Exercise</li>
		<li class="cal5key"><input id="cal5-check" type="checkbox" /> Studio Classes</li>
		<li class="cal4key"><input id="cal4-check" type="checkbox" checked="checked"/> Nightlife</li>
	</ul>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<h5><a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4bb980057c13258b" class="addthis_button_compact">Share this</a></h5>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4bb980057c13258b"></script>
<!-- AddThis Button END -->
</div>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div class="title-search" style="position: relative; clear: both;"><!-- <h1><?php the_title(); ?></h1> --> <?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<small>click on a day to view events or click to  <a href="javascript:parentAccordion.pr(1)">Show all days</a> or <a href="javascript:parentAccordion.pr(-1)">hide all days</a></small></div>

	<?php the_content(); ?>
<small>*Always double-check the information! We try to make sure everything is correct, but we're only human.</small>
	<?php endwhile; ?>
	
	<?php else : ?>
	<?php _e('Sorry, there is nothing here! Try a search.'); ?>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/style/js/script.js"></script>

<script type="text/javascript">

	var parentAccordion=new TINY.accordion.slider("parentAccordion");
	parentAccordion.init("compprop0","h3",0,2);

	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");

</script>
</div> 

<!-- 
///////////////////////////////////////// 
END CONTENT 
/////////////////////////////////////////  
-->


<?php get_footer(); ?>