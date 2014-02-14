<?php
/**
 * The About page widget areas.
 *
 */
?>

<?php if (   ! is_active_sidebar( 'sidebar-9'  )) return; ?>
<div id="supplementary">
	<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-9' ); ?>
	<?php endif; ?>
</div><!-- #supplementary -->