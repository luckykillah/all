<?php
/**
 * Template Name: Homepage
 */
?>

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
	</header><!--  #header -->



<div id="content" class="clearfix photos LBF">

<section class="recent-posts">

</section>	
	

<footer id="main_footer" class="clearfix">
	<p><span class="small">&copy;</span><?php print(date(Y)); ?> <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">Christina Lutters</a>. All rights reserved.</p>
</footer>
</div><!-- #wrapper .hfeed -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/library/js/script.js"></script>
<?php wp_footer(); ?>

</body>
</html>