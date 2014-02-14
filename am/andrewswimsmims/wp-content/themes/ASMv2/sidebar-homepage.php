<?php
/**
 * The Homepage widget areas.
 *
 */
?>

<?php
	if (   ! is_active_sidebar( 'sidebar-6'  )
		&& ! is_active_sidebar( 'sidebar-7' )
		&& ! is_active_sidebar( 'sidebar-8'  )
	)
		return;
?>
<div id="supplementary" class="three">
	<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
	<div id="first" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
	<div id="second" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-7' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
	<div id="third" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-8' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>
</div><!-- #supplementary -->