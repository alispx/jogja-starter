<?php

/**
 * Supports Loader
 *
 * @return void
 * @author 
 **/

class Jogja_Supports_Loader {

	/**
	 * Save the retrieved datas
	*/
	private $support_datas;

	/**
	 * The Support constructor.
	 */
	public function __construct() {
		$this->support_datas = include( JOGJA_THEME_INCLUDES_DIR . '/config/supports.php' );
		$this->install( $this->support_datas );
	}

	/**
	 * Run by the 'after_setup_theme' hook.
	 * Execute the "add_theme_support" function from WP
	 *
	 * @return void
	 */
	public function install( $data ) {

		if ( is_array( $this->support_datas ) && ! empty( $this->support_datas ) ) {
			foreach ( $this->support_datas as $feature => $value ) {
				// Allow theme features without options.
				if ( is_int( $feature ) ) {
					add_theme_support( $value );
				} else {
					// Theme features with options.
					add_theme_support( $feature, $value );
				}
			}
		}

	}
}