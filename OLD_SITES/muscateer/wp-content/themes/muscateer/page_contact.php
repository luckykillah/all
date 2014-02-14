<?php
/*
Template Name: Contact
*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
<title>The Muscateer | Events in Muscat, Oman</title>
<style type="text/css">
<!-- 

@font-face {
	font-family: 'Muscateer';
	src: url('http://www.muscateer.com/wp-content/themes/muscateer/library/fonts/Muscateer.eot');
	src: url('http://www.muscateer.com/wp-content/themes/muscateer/library/fonts/Muscateer.woff') format('woff'), url('http://www.muscateer.com/wp-content/themes/muscateer/library/fonts/Muscateer.ttf') format('truetype');
	}

body{
	background: #82631e url('<?php bloginfo('template_url'); ?>/library/images/BG.jpg') repeat-y; 
	background-position: 50%}

#container_hold{
	width: 740px;
	height: 680px;
	margin: 100px auto 0 auto;
	text-align: center;
	overflow: hidden;
	}

h1{
	font: 0px 'BlackJack'; 
	line-height: 0px;
	color: white;
	}

h2, h3{
	font: 15px 'Muscateer', 'Franklin Gothic Book', 'Trebuchet MS', Tahoma, Arial;
	text-transform: uppercase;
	letter-spacing: 1px;
	border-bottom: double 3px #b68c2c;
	color: white;
	font-weight: normal;
	}
p{
	font: 12.5px Garamond, Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif;
	color: white;
	}

a{color: #82631e;}
a:hover{ color: #5F4506;}

#logo{
	height: 160px;
	background: url('<?php bloginfo('template_url'); ?>/library/images/logo.png') no-repeat;
	width: 320px;
	margin: 0 auto;
	}

#left_info{
	width: 320px;
	padding-right: 50px;
	float: left;
	text-align: left;
	}
#right_info{
	width: 320px;
	padding-left: 50px;
	float: left;
	text-align: left;
	}

#notify{padding-bottom: 30px;}

.muscateer{
	font-family:'Franklin Gothic Book', 'Trebuchet MS', Tahoma, Arial;
	font-size: 20px;
	color: white;
	}


#inshallah p{
	clear: both;
	float: left;
	text-align: left;
	font: 10px 'Franklin Gothic Book', 'Trebuchet MS', Tahoma, Arial;
	margin-top: 100px;
	color: #FFE9AF;
	}

#wpoi_email{
	border: none;
	background: #FFE9AF;
	padding: 1px 5px; 
	font: 12px 'Franklin Gothic Book', 'Trebuchet MS', Tahoma, Arial;
	color: #82631e;
	}
	
.btn{
	background: #977615;
	color: white;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-family: 'Franklin Gothic Book', 'Trebuchet MS', Tahoma, Arial;
	border: none; 
	}
.btn:hover {
	background: #82631e;
	cursor: pointer;
	}
-->
</style>

	<div id="container_hold">
		
		<div id="logo">
			<h1>Muscateer</h1>
			<h1 style="font-size: 0px;"> Muscat's Event Calendar</h1>
		</div>
		
		<div id="left_info">
         <h2> About the Muscateer </h2>
<p>The Muscateer is Muscat’s event calendar, helping Oman residents and visitors easily find out what’s going on in the capital.</p>

<p>Are you looking for a yoga class or a Friday brunch? Has your social schedule fallen into a rut, or even reached rock bottom?</p>

<p>Are you planning a event and want to let people know about it?</p>

<p>Look no further...<br />

<span class="muscateer"> The Muscateer is here! </span> Or... well...<br />

The Muscateer will be here soon!*</p>
		</div>
		
		<div id="right_info">
			
			<div id="notify">
				<h2> Get Notified </h2>
				<p> Sign-up and be the first to know when it's here! <br /><span style="font-size: 10px; color: #FFE9AF;"> We <em>promise</em> not to spam you.</span><p> 
				
				<?php if (function_exists('wpoi_opt_in')) { wpoi_opt_in(); } 
				?>
			<div id="add_event">
				<h2> Get Listed </h2>
				<p>Tell us about the event and we'll put it on the calendar.<br /> (For free!)</p>
				<p>E-mail The Muscateer at: <a href="mailto:Events@muscateer.com?body=Please list my event!"> Events@Muscateer.com</a></p>
			</div>
		
		</div>
		
		<div id="inshallah">
			<p> <span style="color: white; font-size: 12px;"> *Inshallah. </span> <br /> <em> &nbsp; Just kidding. The Muscateer will start saving your schedule March 2010.</em> <p>
		</div>		
		
	</div>