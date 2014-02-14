<?php

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
?>
<?php 
function Twitterpate() {
 
	// Your twitter username.
	$username = "jkimchaix";
 
	$prefix = "<span>Latest Tweet:</span> ";
 
	$suffix = "";
 
	$feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";
 
	function parse_feed($feed) {
 
		/*** Getting Tweet text ***/
		$step_one = explode("<content type=\"html\">", $feed);
		$step_two = explode("</content>", $step_one[1]);
		$tweet = $step_two[0];
		$tweet = str_replace("&lt;", "<", $tweet);
		$tweet = str_replace("&gt;", ">", $tweet);
 
		/*** Getting date in human time difference ***/
		preg_match('~<published>(.*?)</published>~', $feed, $match);
		if (!empty($match)) $date_string = iso8601_to_timestamp($match[0]);
			else $date_string = '';
		if ($date_string != '') {
			$date_string = '<abbr>' . human_time_diff($date_string) . ' ago</abbr>';
			$tweet .= $date_string;
		}
 
		return $tweet;
	}
 
	function iso8601_to_timestamp($datestr) {
		$eregStr =
		'([0-9]{4})-'.  // centuries & years CCYY-
		'([0-9]{2})-'.  // months MM-
		'([0-9]{2})'.   // days DD
		'T'.                    // separator T
		'([0-9]{2}):'.  // hours hh:
		'([0-9]{2}):'.  // minutes mm:
		'([0-9]{2})(\.[0-9]+)?'. // seconds ss.ss...
		'(Z|[+\-][0-9]{2}:?[0-9]{2})?'; // Z to indicate UTC, -/+HH:MM:SS.SS... for local tz's
		if(ereg($eregStr,$datestr,$regs)){
			// not utc
			if($regs[8] != 'Z'){
				$op = substr($regs[8],0,1);
				$h = substr($regs[8],1,2);
				$m = substr($regs[8],strlen($regs[8])-2,2);
				if($op == '-') {
					$regs[4] = $regs[4] + $h;
					$regs[5] = $regs[5] + $m;
				}
				elseif($op == '+') {
					$regs[4] = $regs[4] - $h;
					$regs[5] = $regs[5] - $m;
				}
			}
			return strtotime("$regs[1]-$regs[2]-$regs[3] $regs[4]:$regs[5]:$regs[6]Z");
		}
		else return false;
	}
 
 
	$twitterFeed = file_get_contents($feed);
	return stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
 
}
?>