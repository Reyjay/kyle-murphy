<?php
/**
* functions.php
*
* The theme's functions and definitions.
*
*/

/**
*--------------------------------------------------
*1.0 - Define constants.
*--------------------------------------------------
*/
define( 'THEMEROOT', get_stylesheet_directory_url() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'FRAMEWORKS', get_template_directory() . '/framework' );

/**
*--------------------------------------------------
* 2.0 - Load the framework
*--------------------------------------------------
*/
require_once( FRAMEWORK . '/init.php' );

/**
*--------------------------------------------------
* 3.0 - Setting up the content width value based on the thems's design
*--------------------------------------------------
*/
if( ! isset( $content_width ) ) {
	$content_width = 800;
}

/**
*--------------------------------------------------
* 4.0 - Set up theme default and register various supported features
*--------------------------------------------------
*/
if ( ! function_exists( 'alpha_setup' ) ) {
	function alpha_setup() {
		/**
		* Make theme availible for translation
		*/	
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );
		
		/**
		* Add support for post formats
		*/
		add_theme_support( 'post-formats',  
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);
		
		/**
		* Add support for automatic feed links
		*/
		add_theme_support('automatic-feed-links');
		
		/**
		* Add support for post thumbnails
		*/
		add_theme_support('post-thumbnails');
		
		/**
		* Regester nav menus
		*/
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'alpha' )
			)
		);
	}
	
	add_action( 'after_theme_setup', 'alpha_setup' )
}

?>