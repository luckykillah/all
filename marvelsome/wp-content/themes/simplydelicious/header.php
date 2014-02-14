<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang=en>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
<?php if (function_exists('is_tag') && is_tag()) {
  echo 'Tag Archive for &quot;'.$tag.'&quot; - '; }
  elseif (is_archive()) { wp_title('');
  echo ' Archive - '; }
  elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title('');
  echo ' - '; }
  elseif (is_404()) {
    echo 'Not Found - '; }
    if (is_home()) { bloginfo('name');
    echo ' - '; bloginfo('description'); }
    else { bloginfo('name'); } ?>
</title>

<link href='http://fonts.googleapis.com/css?family=Droid+Serif:italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/light.css" type="text/css" /><!-- Change your color scheme here -->
<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/ie.css" /><![endif]-->
<?php $feedburner = get_option('mmminimal_feedburner'); ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php if ($feedburner != '') { echo 'http://feeds.feedburner.com/'.$feedburner; } else { bloginfo('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
<?php wp_head(); ?>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav-dropdown.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/thumbnail-fade.js"></script>
</head>
<body>

<div id="container">

    <div id="header">

        <!-- Logo starts, edit this in theme options -->

        <div id="logo">

			<?php
			$logourl = get_option('mmminimal_logo');
			if ($logourl != '') {			
			?>
            <h1><a href="/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php echo $logourl; ?>" alt="<?php bloginfo('name'); ?>" width="167" height="51"/></a></h1>
			<?php
			} else {
			?>
			<h1><a href="/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php
			}
			?>

            <div class="slogan"><?php bloginfo('description'); ?></div>

        </div><!-- /#logo -->

        <!-- Logo end, edit this in theme options -->


        <ul id="navigation">

            <li><a href="<?php bloginfo('url'); ?>/" title="Go to <?php bloginfo('name'); ?> home page">Home</a></li>
            <li><a href="#">Category</a>
                <ul>
                    <?php wp_list_categories('orderby=name&title_li=&depth=-1'); ?>
                </ul>
            </li>
            <li><a href="<?php bloginfo('url'); ?>/about" title="Read more about <?php bloginfo('name'); ?>">About</a></li>
        </ul><!-- /#navigation -->

    </div><!-- /#header -->