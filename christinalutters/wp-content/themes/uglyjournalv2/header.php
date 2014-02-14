<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'la'); _e('Not Found', 'la'); elseif ( is_home() ) : _e(' &raquo; ', 'la'); bloginfo('description'); else : wp_title(); endif; ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head() ?>
</head>

<body <?php body_class( $class ); ?> >
<div id="wrapper" class="hfeed">

	<header id="header" class="clearfix">
		<hgroup>
			<h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" rel="home">Christina Lutters, Web Design &amp; Development</a></h1>
			<h2><?php //bloginfo('description') ?></h2>
			<h2>Christina Lutters</h2>
		</hgroup>
		<nav id="access">
			<?php wp_nav_menu( array('menu' => 'Main' )); 
			//if ( is_user_logged_in() ) { wp_nav_menu( array('menu' => 'Main Private' )); }?>
		</nav><!-- #access -->
		<p><em>Short bio about me</em></p>
	</header><!--  #header -->

	