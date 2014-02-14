<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>
			<article id="post-0" class="post error404 not-found" role="main">
				<h1>Not Found</h1>
				<p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
				<?php get_search_form(); ?>
				<script>
					// focus on search field after it has loaded
					document.getElementById('s') && document.getElementById('s').focus();
				</script>
			</article>
<?php get_footer(); ?>
