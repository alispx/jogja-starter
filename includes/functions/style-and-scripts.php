<?php

/**
 * Loads the admin styles & scripts.
 *
 * @since 1.0
 */
add_action( 'admin_enqueue_scripts', 'jogja_admin_scripts' );
function jogja_admin_scripts( $hook ) {

	/* Get theme version in style.css. */
	$theme = wp_get_theme( get_template(), get_theme_root( get_template_directory() ) );

	if ( 'post.php' == $hook || 'post-new.php' == $hook ) {
		wp_enqueue_script( 'jogja-metabox-control-page', JOGJA_THEME_URI . '/framework/Assets/js/page-metabox.js', array( 'jquery' ), '', true );
	}

}

/**
 * Get Font URL
 *
 * @return void
 * @author jogja
 **/
function jogja_fonts_url() {
   
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'jogja' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat|Shadows Into Light|Teko:400' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

/**
 * Loads the theme styles & scripts.
 *
 * @since 1.0
 */
add_action( 'wp_enqueue_scripts', 'jogja_frontend_scripts' );
function jogja_frontend_scripts() {

	/* Get theme version in style.css. */
	$theme = wp_get_theme( get_template(), get_theme_root( get_template_directory() ) );

	/* Load google fonts. */
	wp_enqueue_style( 'jogja-fonts', jogja_fonts_url(), array(), $theme->Version );

	/* Load main style.css */
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme->Version );
	wp_enqueue_style( 'jogja-style-main', JOGJA_THEME_ASSETS_URI . '/css/screen.css', array(), $theme->Version );

	/* Load comment reply. */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Load bundled jQuery. */
	wp_enqueue_script( 'html5', JOGJA_THEME_ASSETS_URI . '/js/ie-support/html5.js', array( 'jquery' ), $theme->Version, true );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
	wp_script_add_data( 'respondjs', 'conditional', 'lt IE 9' );

	/* Load custom js plugins. */
	wp_enqueue_script( 'jogja-plugins', JOGJA_THEME_ASSETS_URI . '/js/plugins.js', array( 'jquery' ), $theme->Version, true );

	/* Load custom js method. */
	wp_enqueue_script( 'jogja-methods', JOGJA_THEME_ASSETS_URI . '/js/methods.js', array( 'jquery', 'jogja-plugins' ), $theme->Version, true );

}
