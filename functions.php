<?php

/**
 * functions and definitions
 *
 * @package jogja
 */

define( 'JOGJA_THEME_DIR', get_template_directory() );
define( 'JOGJA_THEME_URI', get_template_directory_uri() );
define( 'JOGJA_THEME_INCLUDES_DIR', JOGJA_THEME_DIR . '/includes' );
define( 'JOGJA_THEME_INCLUDES_URI', JOGJA_THEME_URI . '/includes' );
define( 'JOGJA_THEME_ASSETS_DIR', JOGJA_THEME_DIR . '/assets' );
define( 'JOGJA_THEME_ASSETS_URI', JOGJA_THEME_URI . '/assets' );
define( 'JOGJA_THEME_VERSION', '1.0' );


/**
 * Initial setup
 *
 * @return void
 * @author jogja
 **/
require_once( JOGJA_THEME_DIR . '/framework/vendor/autoload.php');
require_once( JOGJA_THEME_DIR . '/plugins/class-tgm-plugin-activation.php' );
require_once( JOGJA_THEME_DIR . '/plugins/plugins-config.php');

/**
 * Initial setup theme
 *
 * @return void
 * @author jogja
 **/
add_action( 'after_setup_theme', 'jogja_framework_setup' );
function jogja_framework_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'jogja', get_template_directory() . '/languages' );

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 667; /* pixels */
	}

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	
}

/**
 * Register base sidebar
 *
 * @return void
 * @author jogja
 **/
add_action( 'widgets_init', 'jogja_register_base_sidebar' );
function jogja_register_base_sidebar() {

	$primary = array(

		'name'			=> esc_html__( 'Primary', 'jogja' ),
		'id'			=> 'primary',
		'description'	=> esc_html__( 'Area of primary sidebar', 'jogja' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $primary );

}

// Engine Loader
new Jogja_Supports_Loader();
new Jogja_Menus_Loader();
new Jogja_Images_Loader();
new Jogja_Sidebars_Loader();
new Jogja_Widgets_Loader();
new Jogja_Widget_Files_Loader();
new Jogja_Options_Loader();
new Jogja_Metaboxes_Loader();
new Jogja_Customizer_Loader();
// End Loader
