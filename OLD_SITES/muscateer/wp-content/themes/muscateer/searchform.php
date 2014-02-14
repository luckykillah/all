<!-- custom search form -->
<div id="searchform">
	<form method="get" action="<?php bloginfo('url'); ?>/">
		<input type="text" name="s" size="37" class="search" value="search..." onfocus="if (this.value == 'search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search...';}" />
		<input type="submit" id="search-submit" class="submit" name="submit" value="Go" />
	</form>
</div>
