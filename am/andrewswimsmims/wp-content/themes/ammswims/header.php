<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

<div id="header"> </div>

<div id="container" class="widecolumn" role="main">

<div id="nav">
	<ul>

		<li><a href="http://andrewswimsmims.com/home#header">Home</a></li>
		<li><a href="http://andrewswimsmims.com/home#meettheswim">Meet the Swim</a></li>
		<li><a href="http://andrewswimsmims.com/home#meetme">Meet Me<a/></li>
		<li><a href="http://andrewswimsmims.com/home#meetthecharities">Meet the Charities</a></li>
		<li> </li>
		<li><a href="http://andrewswimsmims.com/blog">Blog</a></li>
		<li><a href="http://andrewswimsmims.com/home#footer">Links</a></li>		
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
