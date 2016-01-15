<?php

/**
 * Jogja Menus Loader
 *
 * @return void
 * @author jogja
 **/

class Jogja_Menus_Loader {

	/**
	 * Save the retrieved datas
	*/
	private $menu_datas;

	/**
	 * The Menu constructor.
	 */
	public function __construct() {
		$this->menu_datas = include( JOGJA_THEME_INCLUDES_DIR . '/config/menus.php' );
		add_action( 'init', array( $this, 'setup' ) );
	}

	/**
	 * Run by the 'init' hook.
	 * Execute the "register_nav_menus" function from WP
	 *
	 * @return void
	 */
	public function setup() {
		if ( is_array( $this->menu_datas ) && ! empty( $this->menu_datas ) ) {
			$locations = array();

			foreach ( $this->menu_datas as $slug => $desc ) {
				$locations[$slug] = $desc;
			}

			register_nav_menus( $locations );
		}

	}
}