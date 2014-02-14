<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/library/images/favicon.ico" rel="shortcut icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/tinydropdown.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/checkboxes.js"></script>
<?php wp_head(); ?>
</head>

<?php if (is_home()) { ?>
<body class="news"> <!-- The default body class is "news" -->
<?php } else { ?>
<body class="<?php echo $post->post_name; ?> <?php echo join( ' ', get_post_class( $class = '', $post_id = null ) ) ?>"> <!-- An alternative body class is defined, based on the page title -->
<?php } ?>



<!-- 
//////////////////////////////////////////  
MENU 
/////////////////////////////////////////  
-->

<div id="wrapper"> 
<div id="header-block">
<div id="header">

	<ul class="menu" id="menu">
	<li><a href="<?php bloginfo('url'); ?>" class="menulink">Calendar <br /><small> view events <br /> by day</small></a>
	</li>
	<li><a href="<?php bloginfo('url'); ?>/venues" class="menulink">Venues<br /><small> places that <br /> hold events</small></a>
		<!--<ul>
			<li><a href="<?php bloginfo('url'); ?>/venues">All Venues</a></li>
			<li><small style="text-align: center;"> by category</small></li>
			<li><a href="<?php bloginfo('url'); ?>/venues#artsculture">Arts+Culture</a></li>
			<li><a href="<?php bloginfo('url'); ?>/venues#sportsexercise">Sports+Exercise</a></li>
			<li><a href="<?php bloginfo('url'); ?>/venues#community">Community</a></li>
			<li><a href="<?php bloginfo('url'); ?>/venues#fooddrink">Food+Drink</a></li>
			<li><a href="<?php bloginfo('url'); ?>/venues#nightlife">Nightlife</a></li>
			 <li><small> by neighborhood </small></li>
			<li><a href="#">Neighborhood</a></li>
			<li><a href="#">Neighborhood</a></li>
			<li><a href="#">Neighborhood</a></li>
			<li><a href="#">Neighborhood</a></li>
			<li><a href="#">Neighborhood</a></li> 
		</ul>-->	
	</li>
	<li>
		<a href="<?php bloginfo('url'); ?>/groups" class="menulink">Groups<br /><small> groups that <br /> host events</small></a>
		<!--<ul>
			<li><a href="<?php bloginfo('url'); ?>/groups#">All Groups</a></li>
<li><small style="text-align: center;"> by category</small></li>
			<li><a href="<?php bloginfo('url'); ?>/groups#artsculture">Arts+Culture</a></li>
			<li><a href="<?php bloginfo('url'); ?>/groups#sportsexercise">Sports+Exercise</a></li>
			<li><a href="<?php bloginfo('url'); ?>/groups#community">Community</a></li>
			<li><a href="<?php bloginfo('url'); ?>/groups#fooddrink">Food+Drink</a></li>
			<li><a href="<?php bloginfo('url'); ?>/groups#nightlife">Nightlife</a></li>
		</ul>-->
	</li>
	<li id="logo"><h1><a href="<?php bloginfo('url'); ?>"><span>The Muscateer: Muscat's Event Calendar</span></a></h1></li>
	<li><a href="<?php bloginfo('url'); ?>/movie-listings" class="menulink">Movies<br /><small> movie showtimes<br /> at the cinemas</small></a></li>
	<li><a href="<?php bloginfo('url'); ?>/feedback" class="menulink">Feedback<br /><small> tell us what<br /> you think </small></a></li>
	<li><a href="<?php bloginfo('url'); ?>/about" class="menulink"> About <br /><small> learn about and  <br /> contact us</small></a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/about">About<small>the </small>Muscateer</a></li>
			<li><a href="<?php bloginfo('url'); ?>/list-event">List<small>an </small>Event</a></li>
			<li><a href="<?php bloginfo('url'); ?>/feedback">Give Feedback</a></li>
			<li><a href="mailto:contact@muscateer.com">Contact Us</a></li>
		</ul>

</li>
</ul>
</div>
</div>


<!-- 
//////////////////////////////////////////  
END HEADER.PHP
/////////////////////////////////////////  
-->
