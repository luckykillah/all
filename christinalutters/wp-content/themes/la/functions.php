<?

add_action( 'after_setup_theme', 'la_setup' );
if ( ! function_exists( 'la_setup' ) ):
	function la_setup() {
		//add_editor_style();
		add_theme_support( 'post-thumbnails' );
		//add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'quote', 'link','image' ) );
	}
endif;

?>
