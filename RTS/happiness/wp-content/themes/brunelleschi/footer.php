			</div><!-- #container -->
			<footer id="footer" role="contentinfo" class="row">
				<div id="footerbar" class="twelvecol last">
					<?php get_sidebar( 'footer' ); ?>
				</div><!-- #footerbar -->
				<div id="colophon" class="twelvecol last">
					<div id="site-info" class="sixcol">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</div><!-- #site-info -->
				</div><!-- #colophon -->
			</footer><!-- #footer -->
		</div><!-- #wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>