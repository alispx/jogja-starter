<?php

class Jogja_Sidebars_Loader {
	/**
	 * Save the retrieved datas
	*/
	private $sidebar_datas;

	/**
	 * The Sidebar constructor.
	 */
	public function __construct() {
		$this->sidebar_datas = include( JOGJA_THEME_INCLUDES_DIR . '/config/sidebars.php' );
		add_action( 'widget_init', array( $this, 'setup' ) );
	}

	/**
	 * Run by the 'after_setup_theme' hook.
	 * Execute the "register_sidebar" function from WP.
	 *
	 * @return void
	 */
	public function setup() {
		if ( is_array( $this->sidebar_datas ) && ! empty( $this->sidebar_datas ) ) {
			foreach ( $this->sidebar_datas as $sidebar ) {
				$sidebar['name'] = $sidebar['name'];

				if ( isset( $sidebar['description'] ) ) {
					$sidebar['description'] = $sidebar['description'];
				}

				register_sidebar( $sidebar );
			}
		}

	}
}