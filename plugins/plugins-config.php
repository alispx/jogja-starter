<?php

/**
 * Register the required plugins for this theme.
 *
 * @since 1.0
 */
add_action( 'tgmpa_register', 'jogja_include_necessary_plugins' );
function jogja_include_necessary_plugins() {

	$plugins = array(

		array(
			'name' 		=> 'Regenerate Thumbnails',
			'slug' 		=> 'regenerate-thumbnails',
			'required' 	=> false,
		),

		array(
			'name' 		=> 'Widget Import / Export',
			'slug' 		=> 'widget-importer-exporter',
			'required' 	=> false,
		),

		array(
			'name' 		=> 'Ninja Forms',
			'slug' 		=> 'ninja-forms',
			'required' 	=> false,
		),

		array(
			'name'     => 'MailChimp for WordPress',
			'slug'     => 'mailchimp-for-wp',
			'required' => false
		),

		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false
		),

	);

	$theme_text_domain = 'jogja';
	$config = array(
		'domain'            => $theme_text_domain,          
		'default_path'      => '',                     
		'menu'              => 'jogja-plugins',
		'has_notices'       => true,                  
		'dismissable'       => true,                   
		'dismiss_msg'       => '',                    
		'is_automatic'      => false,                
		'message'           => '',                         
	);

	tgmpa( $plugins, $config );

}