<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0.1 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css"><!--

/*----------------GLOBALS--------------------*/
* {
	margin: 0;
	padding: 0;
	border: 0;
	font-family:Georgia, Arial, sans-serif;
	font-size:10pt;
	font-weight: normal;
	font-style: normal;
	text-decoration: none;
	color:#bbb;
	list-style: none;
	}

body{
	width: 900px;
	background: #151633 ; /*#930016 RED, fae15b YELLOW 93c495 GREEN*/
	margin: 0 auto 0 auto;
	text-align: center;
	}

#container{
	width: 800px;
	text-align: left;
	}

/*-----------------TYPOGRAPHY----------------*/


h2{
	font-weight: normal;
	float: left;
	clear: both;
	}

h3{
	color: #930016;
	font-size: 14pt;
	font-weight: bold;
	width: 800px;
	}
	
h4{
	color: #930016;
	font-size: 12pt;
	font-weight: bold;
	margin: 10px 0 0 10px;
	}
	
p{
	margin: 10px 0 0 0;
	line-height: 12pt;
	}
.firstparagraph{
	font-size: 14pt;
	line-height: 14pt;
	}
a{	
	color:#930016;
	}
a:hover{
	color: #fae15b;
	}
a:visited{
	color: #930016;
	}
em{
	font-style: italic;
	}



/* ------------------NAVIGATION------------------*/

#nav{
	position: fixed;
	right: 0px;
	top: 100px;
	height: 400px;
	width: 100px;
	background: url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/nav.png) no-repeat;
	}
		#nav ul{padding-top: 50px;}
		#nav li{
			height:50px;
			padding: 0px 0 0 35px;
			line-height: 1em;
			}
		#nav li a{
			height: 50px;
			width: 50px;
			font-weight: bold;
			font-size: 10pt;
			color: black;
			}
		
		#nav li a:hover{
			color:#930016;
			}

/* ------------------LAYOUT------------------*/
#header{
	position: relative;
	top:0;
	left: 0px;
	background: #DAEADF;
	}


#title{
	float: left;
	clear: both;
	margin: -999px 0 0 0;
	}

.top{
	width:200px;
	height: 188px;
	float: left;
	background:url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/postit.jpg) no-repeat;
	margin: 0px 0px 0 0px;
	}
	
		.top h3{
			padding: 10px 0 0 15px;
			height: 30px;
			}
	
		.top p{
			width: 180px;
			height: 110px;
			padding: 0 0px 0 20px;
			margin: 0 -5px 0 0;
			color: black;
			/*text-align: justify;*/
			}
		.top:hover{
			background:#fae469; /*CFB940;*/
			}

#meettheswim, #meetme, #meetthecharities{
	width: 800px;
	position: relative;
	float: left;
	clear: both;
	margin: 40px 0px 40px 0;
	padding: 40px 0 0 0 ;
	}

#meettheswim{background:url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/headings_01.png) no-repeat;}
#meetme{background:url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/headings_03.png) no-repeat;}
#meetthecharities{background:url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/headings_05.png) no-repeat;}

#meettheswim h3, #meetme h3, #meetthecharities h3{
	text-indent: -9999px;
	}

#meettheswim img{
	margin: 15px 0 0 60px;
	text-align: right;
	}
#meetme img{
	margin: 0;
	border:solid 20px #bbb;
	}
	
.left{
	width: 360px;
	margin: 0 20px 0 0;
	float: left;
	}

.right{
	width: 360px;
	margin: 0 0 0 20px;
	float: left;
	}	


#donate a{
	height: 60px;
	width: 275px;
	position:absolute;
	bottom: 30px;
	left: 20px;
	background: url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/donate_02.png) no-repeat;
	}
	
		#donate a:hover{
			background: url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/donate_01.png) no-repeat;
			}
		
#footer{
	height: 130px;
	width: 800px;
	clear: both;
	float: left;
	position: relative;
	background: /*#fae15b*/ url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/footer.png) no-repeat top left;
	margin: 40px 0px 0 0px;
	}			

#footerunit1{
		width: 150px;
		margin:0 10px;
		float: left;
		}
#footerunit2{
		width: 250px;
		margin: 0 10px;
		float: left;
		}
#footerunit3{
		width: 190px;
		margin: 0 10px;
		float: left;
		}
#footerunit4{
		width: 100px;
		margin: 0 10px;
		float: left;
		}		


		#footer ul{
			margin: 15px 0 0 0;
			}
		#footer li a{
			height: 37.5px;
			width: 250px;
			float: left;
			background-image:url(http://andrewswimsmims.com/wp-content/themes/ammswims/images/headings_footer.png);
			}
			
			#footer li a#theswim{background-position: 0px 0px;height: 37.5px;width: 250px;}
			#footer li a:hover#theswim{background-position: 0px -37.5px;height: 37.5px;width: 250px;}
			#footer li a#otherinfo{background-position: 0px -75px;height: 37.5px; width: 250px;}
			#footer li a:hover#otherinfo{background-position: 0px -112.5px;height: 37.5px;width: 250px;}
			#footer li a#thecharities{background-position: 0px -150px;height: 37.5px;width: 250px;}
			#footer li a:hover#thecharities{background-position: 0px -187.5px;height: 37.5px;width: 250px;}
			#footer li a#donate{background-position: 0px -300px; width: 130px;height: 37.5px;}
			#footer li a:hover#donate{background-position: 0px -335.5px; width:130px;height: 37.5px;}
			
		#footer p{
			clear: both;
			padding-left: 2px;
			}
		#footer p#copyright{
			position: absolute;
			bottom: 5px;
			left: 30px;
			color: #777;
			font-size: 6pt;
			}
			
				#footer p#copyright a{
					color: #777;
					font-size: 6pt;
					}
				#footer p#copyright a:hover{
					color: #930016;
					}					
	

--></style>
</head>

<body>
<div id="container">

<div id="header">
	<img src="http://andrewswimsmims.com/wp-content/themes/ammswims/images/AMMswimphoto_WILL3.jpg" height="550" width="800" />

</div>	

<div id="nav">
	<ul>
		<li><a href="#header">Home</a></li>
		<li><a href="#meettheswim">Meet the Swim</a></li>
		<li><a href="#meetme">Meet Me<a/></li>
		<li><a href="#meetthecharities">Meet the Charities</a></li>
		<li> </li>
		<li><a href="http://andrewswimsmims.com/blog">Blog</a></li>
		<li><a href="http://andrewswimsmims.com#footer">Links</a></li>
	</ul>
</div>

<div id="title">
	<h1> Andrew Swims MIMS</h1>
	<h2> Andrew Malinak hopes to swim MIMS, Manhattan Island Marathon Swim, on June 12, 2010. This is his personal webpage providing infomation about the swim, the charities and himself.</h2>
</div>

<div id="top">
	<a href="#meettheswim">
		<div id="meettheswimtop" class="top">
			<h3>Meet the Swim</h3>
			<p> On June 12, 2010 NYC Swim will present the annual 28.5 mile Manhattan Island Marathon Swim, a full counter-clockwise circum -navigation of the island of Manhattan. </p>
		</div>
	</a>
	
	<a href="#meetme">
		<div id="meetmetop" class="top">
			<h3>Meet Me</h3>
			<p> I may not be a radioactive giant lizard, but I won't let that stop me taking on Manhattan by sea. </p>
		</div>
	</a>
	
	<a href="#meetthecharities">
		<div id="meetthecharitiestop" class="top">
			<h3>Meet the Charities</h3>
			<p> The funds raised by Andrew for this swim will be split between the New York City Parks Department's Learn to Swim program and the FDNY Foundation. <!-- <a href="https://nycswim.org/About/DonateForm.aspx"> Donate now.</a> --></p>
		</div>
	</a>
	
	<a href="http://andrewswimsmims.com/blog">
		<div id="myblog" class="top">
			<h3>My Blog</h3>
			<p> Training for MIMS in Muscat, Oman should be interesting. See what I've been up to.</p>
		</div>
	</a>	
</div>

<div id="meettheswim">
	<h3> Meet the Swim</h3>
	<p class="firstparagraph">On June 12, 2010 NYC Swim will present the annual 28.5 mile Manhattan Island Marathon Swim, a full counter-clockwise circumnavigation of the island of Manhattan.</p>
	
	<div class="left"><img src="http://andrewswimsmims.com/wp-content/themes/ammswims/images/map.jpg" />
		<p>Read what others have written about past swims:</p>
		<a href="http://www.dhckc.org/MIMS.html">The Corporate Relays of the 2004 MIMS</a><br />
		<a href="http://www.jponthe.net/sports/mims_2007.html"> Great photos of the 2007 MIMS</a><br />
		<a href= "http://palfreymarathonswims.com/swims/manhattan-island-marathon-swim-mims-2009/"> An Aussie couple swim the 2009 MIMS</a><br />
		<a href= "http://www.mykayakingbuddies.com/manhatten-island-marathon-swim-kayaker-support-by-jules-88.html"> Kayaker support for MIMS</a><br />
		<a href="http://nycswim.org/"> Still more information can be found at NYC Swim.</a>
	</div>
	<div class="right"><p><em>(Information from <a href="http://www.nycswim.com">NYC Swim</a>.)</em></p><p>The race starts and finishes at South Cove in Battery Park City on the Hudson River. Swimmers begin at South Cove, navigate around the Battery, then head north up the East River, counter-clockwise around Manhattan Island. They swim north into the Harlem River, through Spuyten Duyvil, and then south down the Hudson River to the Battery. There are 4 check points: Hell's Gate where the East River meets the Harlem River, Spuyten Duyvil where the Harlem River meets the Hudson River, the 79th Street Boat Basin in the Hudson River, and the World Financial Center.</p>
	<h4>First Leg - The East River:</h4> <p>Swimmers proceed up the East River under the Brooklyn Bridge, Manhattan Bridge and Williamsburg Bridge. Just beyond the second bridge in the East River (the Manhattan Bridge), the swimmers steer clear of the pier near the prison barge by adjusting the course towards the center of the river. On the left side of the river, at 23rd Street, swimmers watch for float planes taking off and landing. The planes dock at the marina near the "Gulf" sign.</p>
	<p>The swimmers continue up the East River through the west channel (Manhattan side), passing by Roosevelt Island. Swimmers are advised to keep to the Manhattan side of the Channel throughout the entire East River.</p>
	<h4>Second Leg - The Harlem River:</h4> <p>Swimmers then head towards the leftmost stanchion on the footbridge at the entrance to the Harlem River at Hell's Gate. This is their first check point. Once they have entered the Harlem River, they will stay to their left. The swimmers take all bridges on their leftmost channel, allowing enough room for the Circle Line and other boat traffic to pass.</p>
	<h4>Final Leg -The Hudson River:</h4><p> At Spuyten Duyvil, where the Harlem River joins the Hudson River, the swimmers pass their second check point. They head down the Hudson River towards the George Washington Bridge, staying about one-third of the way from the Manhattan side. After coming under the GW Bridge, the swimmers must stay as far enough out from shore so that they are not swept into the sewage disposal plant, which protrudes out about a quarter of a mile. This plant spans 10 blocks, from 145th to 135th Street.</p>
	<p>The swimmers continue down the Hudson River on the Manhattan side. Their third check point is opposite the 79th Street Boat Basin. The swimmers are advised to stay on the Manhattan side of the river. As they come down the Hudson River, the swimmers must be careful of boats coming out of the piers, especially between 50th and 23rd streets. Swimmers are not allowed to swim closer than 20 yards to the end of any pier.</p>
	</div>


</div>

<div id="meetme">

	<h3>Meet Me</h3>
	<div class="left">
	<p class="firstparagraph">I may not be a radioactive giant lizard, but I won't let that stop me taking on Manhattan by sea.</p>
	<br /> 
	<img src="http://andrewswimsmims.com/wp-content/themes/ammswims/images/0910 091809-c.jpg" height="340" width="340" />
	<p>Check out <a href="http://andrewswimsmims.com/blog">my blog</a> to see what pools I've found, what beaches I am frequenting, and which islands I've swam around in preparation for swimming around Manhattan.</p>
	</div>
	<div class="right">
	<p>The swim will use over 14 years of training, from my humble beginnings with coach Larry Collins in Poughkeepsie to the self-trained endurance events in the Delaware Valley. I'll be using the strokes that I have been practicing from day one of competitive swimming in 1995; the physical perseverance that I practiced every day from that day onwards at countless training sessions and races; the self-awareness that I acquired on the University of Delaware varsity swim team; the management that I learned from the UD Club Water Polo team; and the training regime that I learned from several years of individual competition. All of these will come together to circumnavigate this 28 Mile Island.</p>
	<p>I grew up on the Hudson River 96 miles north of Manhattan Island. Manhattan has always been a destination. As a child, it was a few train rides to the city each year. Then, as I grew older, it became a place to go for swim meets. Now, having moved abroad, it has become a destination that equates to home. This swim will require more physical strength and determination than any athletic event I have done yet and when it is over. I will have left a part of me in the waters around Manhattan: this will serve as an unbreakable tie between me and my home when I return overseas.</p>
	
	<p>In November 2008, I moved from London to Dubai. It took me several months to find my feet, or I should say, my fins. Public pools are hard to find in the Middle East and it took me until the following April to find a suitable place to train. I began swim coaching with Active Sports twice a week after work in exchange for free pool time, and supplemented this with training on the Umm Suqeim Beach near the Burj al Arab. Then the Red Tide came in making the beach unswimable, and the school year ended leaving the pools closed; training moved to the treadmill and an indoor gym. My move to Muscat in late October 2009 will shake up my training grounds once again. </p>
	</div>
</div>

<div id="meetthecharities">

	<h3> Meet the Charities</h3>
	<p class="firstparagraph">The funds raised by Andrew for this swim will be split between the New York City Parks Department's <a href="http://www.nycgovparks.org/sub_things_to_do/programs/ap_aquatics.html"> Learn to Swim</a> program and the <a href="http://www.fdnyfoundation.com/"> FDNY Foundation.</a> <a href="https://nycswim.org/About/DonateForm.aspx">Donate now.</a></p><br />
	<div class="left"><a href="http://www.nycgovparks.org/sub_things_to_do/programs/ap_aquatics.html"> <h4>Learn to Swim</h4></a>
		<p>New York City Parks Department's Learn to Swim program is a free, fun-filled way for children to learn how to swim or to improve their swimming skills.</p>
		<p>In the early 1990s, the newly formed Manhattan Island Foundation linked the reinstitution of the learn-to-swim classes to the revitalization of the Manhattan Island Marathon Swim. In exchange for Parks Department support, the proceeds from MIMS were earmarked for restoring the Parks Department's free swim classes.</p>
		<p>Since 1993, more than 40,000 city children have participated in the Learn to Swim program.</p>
		<p>For more information on class days, times, and pool addresses call 718-760-6969 or visit the City of New York Parks and Recreation <a href=" http://www.nycgovparks.org/sub_things_to_do/programs/ap_aquatics.html/">website</a>.</p></div>

	<div class="right"><a href="http://www.fdnyfoundation.com/"> <h4>FDNY Foundation</h4></a>
		<p>The FDNY Foundation is the official not-for-profit organization of the New York City Fire Department. The mission of the Foundation is to assist the FDNY and EMS in educating, informing, and involving the public in protecting life and property, and support the Department's operational enhancements.</p>

		<p>The Foundation raises money for programs through government grants, corporate gifts, foundations, and individual donors. This fundraising helps the Department maintain the tradition of excellence that is recognized throughout the world as setting the standard in fire suppression, pre-hospital medical care, and emergency response. They raise money for the Department's fire safety programs to continue educating the public to take preventative measures to protect themselves from serious injury or fatality in the event of fire, medical emergencies, homeland security risks and other threats to life and liberty. The Foundation also provides grants for expanded training programs, the purchase of equipment and investments in state of the art technology to assist the Department in reducing injuries and fatalities.</p>

		<p>For more information call 718-999-0779 or visit the FDNY Foundation's <a href="http://www.fdnyfoundation.com/">website</a>.</div>
		
		<div id="donate"> 
			<a href="https://nycswim.org/About/DonateForm.aspx"> </a>
		</div>

</div>

<div id="footer">
	<ul>
		<div id="footerunit1">
			<li><a id="theswim" href="#meettheswim"> </a></li>
			<p><a href="https://nycswim.org">NY Swim website</a>
		</div>
		<div id="footerunit2">	
			<li><a id="thecharities" href="#meetthecharities"> </a></li>
				<p><a href=" http://www.nycgovparks.org/sub_things_to_do/programs/ap_aquatics.html/">NYC Park's Learn to Swim program</a>
				<br /><a href="http://www.fdnyfoundation.com/">FDNY Foundation</a></p>
			<!-- <li><a id="blog" href="http://andrewswimsmims.com/blog"> </a></li> -->
		</div>
		
		<div id="footerunit3">
			<li><a id="otherinfo" href="http://andrewswimsmims.com/blog"> </a></li>
				<p><a href="http://www.dhckc.org/MIMS.html">MIMS '04: Corporate Relays</a><br />
				<a href="http://www.jponthe.net/sports/mims_2007.html"> Great photos of the 2007 MIMS</a><br />
				<a href= "http://palfreymarathonswims.com/swims/manhattan-island-marathon-swim-mims-2009/"> Aussie couple @ MIMS '09 </a><br />
				<a href= "http://www.mykayakingbuddies.com/manhatten-island-marathon-swim-kayaker-support-by-jules-88.html"> Kayaker support for MIMS</a> </p>
		</div>		
		<div id="footerunit4">	
			<li><a id="donate" href="https://nycswim.org/About/DonateForm.aspx"> </a></li>
		</div>
	</ul>

	<p id="copyright">Copyright, <a href="http://andrewswimsmims.com/">AndrewSwimsMIMS.com</a>. Website by <a id="christina" href="http://www.christinalutters.com">Christina Lutters</a>.</p>
</div>

</body>
</html>