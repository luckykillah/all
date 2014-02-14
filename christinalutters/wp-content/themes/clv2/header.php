<!doctype html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>Christina Lutters</title>
	<meta name="description" content="ADD A DESCRIPTION">
	<meta name="author" href="humans.txt">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="/V2/-/style/style.css?v=2">
	<!--<link rel="stylesheet" media="handheld" href="/V2/-/style/handheld.css?v=2">-->
	<script src="/V2/-/js/libs/modernizr-1.7.min.js"></script>
	<script type="text/javascript" src="http://use.typekit.com/eli4prg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15255245-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
function viewport() {
	var myWidth = 0, myHeight = 0;
	if( typeof( window.innerWidth ) == 'number' ) {
	//Non-IE
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
	} else if( document.documentElement &&
	( document.documentElement.clientWidth
	|| document.documentElement.clientHeight ) ) {
	//IE 6+ in 'standards compliant mode'
	myWidth = document.documentElement.clientWidth;
	myHeight = document.documentElement.clientHeight;
	} else if( document.body &&
	( document.body.clientWidth
	|| document.body.clientHeight ) ) {
	//IE 4 compatible
	myWidth = document.body.clientWidth;
	myHeight = document.body.clientHeight;
	}
	_gaq.push(['_trackEvent',
	'Viewport',
	'Size',
	myWidth+'x'+myHeight, true]);
	_gaq.push(['_trackEvent',
	'Viewport',
	'Width',
	myWidth+'x'+myHeight,
	myWidth, true]);
	_gaq.push(['_trackEvent',
	'Viewport',
	'Height',
	myWidth+'x'+myHeight,
	myHeight, true]);
	}

</script>
</head>
<body onLoad="viewport()" <?php body_class();?>>
<div id="wrap">
<header id="main_header">
	<h1><a href="/" title="link to ChristinaLutters.com homepage" class="ir">Christina <span>Lutters</span></a></h1>
	<h2>Web Design <span class="amp">&amp;</span> Development</h2>
	<nav id="main_nav">
		<ul>
			<li id="nav-work"><a href="/work" title="link to Work Page">Work</a></li>
			<li id="nav-about"><a href="/about" title="link to About Page">About</a></li>
			<li id="nav-notes"><a href="/notes" title="link to Notes Page">Journal</a></li>
		</ul>
	</nav>
</header>
<?php //wp_nav_menu( array('menu' => 'Main' )); ?>
<ul class="menu">
	<li><a href="/work" title="link to Work Page">Work</a> <span class="small"> // </span></li>
	<li><a href="/about" title="link to About Page">About</a> <span class="small"> // </span></li>
	<li><a href="/notes" title="link to Notes Page">Journal</a></li>
</ul>