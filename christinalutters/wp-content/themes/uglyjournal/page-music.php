<?php
/**
 * Template Name: Music
 */
?>
<?php get_header() ?>

	<div id="container" class="personal_home LBF">
		<div id="content clearfix">
			<article>
				<h2 class="entry-title">To Do List <em>via <a href="http://www.rememberthemilk.com/home/lalaalaaa/" title="Last.fm">Remember the Milk</a></em></h2>
				<h3>Due Now</h3>
				<ol>
					<?php RTM('http://www.rememberthemilk.com/atom/lalaalaaa/14249927/?tok=eJwVwtkJAzEMBcCKDLb8rKMcWQcs7F-SPyHDNBa2mokccppYamB2kaC*VtzI4smxhU*GaR83nVdt7rgHd7z**r*P9-l8xwLBjGSksq5wo*os5A6V6AVBHJtVV8vlzFlYR5CWROgtndQbUN8-hh0qJA'); ?>
				</ol>
				<br />
				<h3>Task Overview</h3>
				<ol>
					<?php RTM('http://www.rememberthemilk.com/atom/lalaalaaa/16993989/?tok=eJwVwlEKAzEIBcATBUw06juO0QgL*9fen9JhWqawA2Z7xSKZDlENs1x9cLWlrpImm*5KeO*A03EQ59lyxhtv-Md4n893TAUYjoEFQ8xoiKdZHbZbec*ibaeySVaaJ6hpTitUtV7a3GD2UvoBgh4qOA'); ?>
				</ol>
			</article>
			
			<article>
				<h2 class="entry-title">Reading Offline <em>via <a href="http://www.goodreads.com/" title="Goodreads">Goodreads</a></em></h2>
				<div id="gr_grid_widget_1292540239">    
					<div class="gr_grid_container">
						<div class="gr_grid_book_container"><a href="http://www.goodreads.com/book/show/2094352.Terrible_Beauty" title="Terrible Beauty: A History of the People and Ideas That Shaped the Modern Mind"><img alt="Terrible Beauty: A History of the People and Ideas That Shaped the Modern Mind" src="http://ecx.images-amazon.com/images/I/41G5NXGB3AL._SX106_.jpg" /></a></div>
						<div class="gr_grid_book_container"><a href="http://www.goodreads.com/book/show/21.A_Short_History_of_Nearly_Everything" title="A Short History of Nearly Everything"><img alt="A Short History of Nearly Everything" src="http://photo.goodreads.com/books/1255682270m/21.jpg" /></a></div>
						<div class="gr_grid_book_container"><a href="http://www.goodreads.com/book/show/2286633.The_Pirate_s_Dilemma" title="The Pirate's Dilemma: How Youth Culture Is Reinventing Capitalism"><img alt="The Pirate's Dilemma: How Youth Culture Is Reinventing Capitalism" src="http://photo.goodreads.com/books/1255753469m/2286633.jpg" /></a></div>
						<div class="gr_grid_book_container"><a href="http://www.goodreads.com/book/show/2728527.The_Guernsey_Literary_and_Potato_Peel_Pie_Society" title="The Guernsey Literary and Potato Peel Pie Society"><img alt="The Guernsey Literary and Potato Peel Pie Society" src="http://photo.goodreads.com/books/1267058798m/2728527.jpg" /></a></div>    	
				  </div>
				</div><script src="http://www.goodreads.com/review/grid_widget/3616839.Christina's%20currently-reading%20book%20montage?cover_size=medium&amp;hide_link=true&amp;hide_title=true&amp;num_books=20&amp;order=a&amp;shelf=currently-reading&amp;sort=date_added&amp;widget_id=1292540239" type="text/javascript" charset="utf-8"></script>
			</article>
			
			<article>	
				<h2 class="entry-title">Wishing to Read Online <em>via <a href="http://www.instapaper.com/u" title="Instapaper">Instapaper</a></em></h2>
				<ol class="instapaper">
					<?php instapaper_feed('http://www.instapaper.com/rss/1085306/elD5BBfculb8XF6hSvEnaLhh58c'); ?>
				</ol>
			</article>
			
			<article>
				<h2 class="entry-title">Looking at Online <em>via <a href="http://vi.sualize.us/lalaalaaa/" title="Vi.sualiz.us">Vi.sualiz.us</a></em></h2>
				<ul class="vis clearfix">
					<?php visualizus_feed('http://vi.sualize.us/rss/lalaalaaa/'); ?>
				</ul>
			</article>
			
			<article>
				<h2 class="entry-title">Looking at Online <em>via <a href="http://vi.sualize.us/lalaalaaa/" title="Flickr Contacts">Flickr Contacts</a></em></h2>
				<ul class="vis clearfix">
					<?php flickr_feed('http://api.flickr.com/services/feeds/photos_friends.gne?user_id=35469800@N07&friends=0&display_all=1&lang=en-us&format=rss_200'); ?>
				</ul>
			</article>
		</div>
		</div><!-- end #content -->
		<?php get_footer() ?>