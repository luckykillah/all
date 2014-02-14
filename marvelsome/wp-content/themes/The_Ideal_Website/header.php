<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; iA Notebook <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="iA <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">
ul li {
	text-align:	left;
	list-style-image:	url(<?php bloginfo('template_url');?>/i/arrow.gif);
	vertical-align:	baseline;
}
</style>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>

<div id="logo"> 
		<a href="<?php print bloginfo("url");?>"><?php bloginfo('name'); ?></a>
</div>



<div id="content">

<div id="main">
	
	<div class="headerText">
		<?php	
		$sep = "> ";	
		$isBreadcrumbActive = false;		
		if(function_exists('get_breadcrumb'))
		{
			$breadcrumb = get_breadcrumb();
			$isBreadcrumbActive = true;
		}
		?>
			<a href="<?php echo bloginfo("url") ?>" title="<?php bloginfo("name") ?>">Home</a> 
			<?php print $sep?> 
			<?php
			if(!is_home() && !is_page() && !is_search())
			{?>
				Blog		
				<?php print $sep;	
			}
			else if(is_search())
			{?>
				Search
				<?php print $sep?>
				<?php
			}	
			breadcrumb("sep=>&home_never=true"); 
		 ?>
	</div>

