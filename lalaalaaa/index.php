
<!doctype html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>lalaalaaa</title>
	<link rel="shortcut icon" href="/L.png">
	<link rel="apple-touch-icon" href="/L.png">
	<style type="text/css">
		*{ margin: 0; padding: 0; }
		html, body{ height: 100%; text-align: center; white-space: nowrap; }
		img{ display: inline-block; margin-bottom: -8px; }
		a{ transition: .1s linear all; -webkit-transition: .1s linear all; }
		a:hover{ opacity: .5; }
	</style>

</head>	
	
<body>

<table width="100%" height="100%">
<tr>
<td>
	
	<div style="width: 100%; height: 104px; background: #ddf8f9;">
		<div style="position: relative; top: -27px; max-width: 100%;">
		<?php
		for($j = 1; $j < 4; $j++){
			for($i = 1; $i < 3; $i++){
				if ( $j != 3 || $i != 2 ){ 
					echo "<img src='L.png' /><img src='A.png' /><img src='L.png' /><img src='A.png' /><img src='A.png' /><img src='L.png' /><img src='A.png' /><img src='A.png' /><img src='A.png' />";
				}
				else{
					echo "<img src='L.png' /><img src='A.png' /><img src='L.png' /><img src='A.png' /><img src='A.png' /><img src='L.png' /><a href='https://twitter.com/lalaalaaa'><img src='A-2.png' /></a><img src='A.png' /><img src='A.png' />";
				}
			}
			echo "<br />";
		}
		?>	
		</div>
	</div>

</td>
</tr>
</table>
</body>
</html>