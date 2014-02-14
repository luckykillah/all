<?php
/**
 * The template for displaying the footer.
 */
?>
		</section><!-- #main -->
		<footer role="contentinfo">
<?php get_sidebar( 'footer' ); ?>
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</footer><!-- footer -->
<?php wp_footer(); ?>
</div>	
</body>
</html>