<!-- 
////////////////////// 
START FOOTER.php 
///////////////////// 
-->
</div>



<div id="footer-block" class="clearfix">

<div id="footer">
	<div class="footer1">
	<h5> About The Muscateer</h5>
	<p> Some would call The Muscateer an experiment. Others just say he is a great guy. He works in his free time to keep you up to date on Muscat's events and defend you from boredom.</p>
	<p> Let him know what you think of this project! If you love it, or hate it... If you know about something that you don't see here... <a href="mailto:contact@muscateer.com">let him know!</a> </p>
	<h5>What's on your mind?</h5>
	<h5><a href="mailto:contact@muscateer.com">Email The Muscateer <small> or </small></a></h5> 
	<h5><a href="<?php bloginfo('url'); ?>/list-event">Promote an Event </a></h5>
	</div>	

	<div class="footer2">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_bottom_middle') ) : ?>
	<?php endif; // endif widget ?> 
	</div>
	
	<div class="footer3">
	
	<h5><a href="<?php bloginfo('url'); ?>">The calendar </a></h5>
	<!--<ul>
		<li><a href="<?php bloginfo('url'); ?>">All Events</a></li>
		<li><a href="<?php bloginfo('url'); ?>/arts-culture">Arts+Culture</a></li>
		<li><a href="<?php bloginfo('url'); ?>/sports-exercise">Sports+Exercise</a></li>
		<li><a href="<?php bloginfo('url'); ?>/community">Community</a></li>
		<li><a href="<?php bloginfo('url'); ?>/food-drink">Food</a></li>
		<li><a href="<?php bloginfo('url'); ?>/nightlife">Nightlife</a></li>
	</ul> -->
	<h5><a href="<?php bloginfo('url'); ?>/venues"> Venues</a> </h5>
	<h5><a href="<?php bloginfo('url'); ?>/groups"> Groups</a> </h5>
	<h5><a href="<?php bloginfo('url'); ?>/movie-listings"> Movie Listings</a> </h5>
	<h5><a href="<?php bloginfo('url'); ?>/feedback"> Feedback</a> </h5>
	<h5><a href="<?php bloginfo('url'); ?>/list-event>List an Event</a> </h5>
	<h5><a href="<?php bloginfo('url'); ?>/about">About</a> </h5>
	<div id="footer-searchform">
		<form method="get" action="<?php bloginfo('url'); ?>/">
			<input type="text" name="s" class="search" value="search..." onfocus="if (this.value == 'search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search...';}" />
			<input type="submit" class="search-submit submit" name="submit" value="Go" />
		</form>
	</div>

<small> <br />Copyright 2010, <a href="http://www.muscateer.com">The Muscateer</a>. </small>
	</div>

</div>
	<br class="clear" />
</div>
<!-- wp_footer -->
<?php wp_footer(); ?>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5702067; 
var sc_invisible=1; 
var sc_partition=71; 
var sc_click_stat=1; 
var sc_security="621a01c4"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><div class="statcounter"><a title="wordpress visitor" href="http://www.statcounter.com/wordpress.org/" target="_blank">
<img class="statcounter" src="http://c.statcounter.com/5702067/0/621a01c4/1/" alt="wordpress visitor" />
</a></div></noscript>
<!-- End of StatCounter Code -->
</body>
</html>
