<?php

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// General Section
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
add_filter( 'jogja_customizer_data', 'jogja_general_settings_data' );
function jogja_general_settings_data( $tokoo_options ) {

	/* ======================================================================================*
	 *  General Settings Panel + Settings + data 										 												*
	 * ======================================================================================*/
	$tokoo_options[] = array(
		'slug'		=> 'tokoo_general_settings',
		'label'		=> esc_html__( 'General Settings', 'jogja' ),
		'priority'	=> 1,
		'type' 		=> 'panel'
	);

		/* ==================================================== *
		 *  Site Section  										*
		 * ==================================================== */
		$tokoo_options[] = array(
			'slug'		=> 'tokoo_site_settings',
			'label'		=> esc_html__( 'Site Settings', 'jogja' ),
			'panel' 	=> 'tokoo_general_settings',
			'priority'	=> 1,
			'type' 		=> 'section'
		);

			/* ============================================================ *
			 *  Site Data  													*
			 * ============================================================ */
			$tokoo_options[] = array(
				'slug'		=> 'tokoo_custom_logo',
				'default'	=> '',
				'priority'	=> 1,
				'label'		=> esc_html__( 'Custom Logo', 'jogja' ),
				'section'	=> 'tokoo_site_settings',
				'output'    => false,
				'transport'	=> 'postMessage',
				'type' 		=> 'images'
			);

		/* ==================================================== *
		 *  Social Icons Section  								*
		 * ==================================================== */
		$tokoo_options[] = array(
			'slug'		=> 'tokoo_social_icons_settings',
			'label'		=> esc_html__( 'Social Icons', 'jogja' ),
			'panel' 	=> 'tokoo_general_settings',
			'priority'	=> 4,
			'type' 		=> 'section'
		);

			/* ============================================================ *
			 * Account Data  												*
			 * ============================================================ */
			$tokoo_options[] = array(
				'slug'		=> 'tokoo_fb',
				'default'	=> '',
				'priority'	=> 1,
				'label'		=> esc_html__( 'Facebook Username', 'jogja' ),
				'section'	=> 'tokoo_social_icons_settings',
				'type' 		=> 'text',
				'transport'	=> 'refresh',
			);
			$tokoo_options[] = array(
				'slug'		=> 'tokoo_tw',
				'default'	=> '',
				'priority'	=> 2,
				'label'		=> esc_html__( 'Twitter Username', 'jogja' ),
				'section'	=> 'tokoo_social_icons_settings',
				'type' 		=> 'text',
				'transport'	=> 'refresh',
			);
			$tokoo_options[] = array(
				'slug'		=> 'tokoo_gplus',
				'default'	=> '',
				'priority'	=> 5,
				'label'		=> esc_html__( 'Google Plus Username', 'jogja' ),
				'section'	=> 'tokoo_social_icons_settings',
				'type' 		=> 'text',
				'transport'	=> 'refresh',
			);
			$tokoo_options[] = array(
				'slug'		=> 'tokoo_pinterest',
				'default'	=> '',
				'priority'	=> 6,
				'label'		=> esc_html__( 'Pinterest Username', 'jogja' ),
				'section'	=> 'tokoo_social_icons_settings',
				'type' 		=> 'text',
				'transport'	=> 'refresh',
			);


		

	return $tokoo_options;
}
