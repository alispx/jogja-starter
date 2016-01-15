<?php

class Jogja_Widgets_Loader {
	/**
	 * Save the retrieved datas
	*/
	private $widget_datas;

	/**
	 * The Support constructor.
	 */
	public function __construct() {
		$this->widget_datas = include( JOGJA_THEME_INCLUDES_DIR . '/config/widgets.php' );
		$this->setup();
	}

	/**
	 * Run by the 'after_setup_theme' hook.
	 * Execute the "add_theme_support" function from WP
	 *
	 * @return void
	 */
	public function setup() {

		if ( is_array( $this->widget_datas ) && ! empty( $this->widget_datas ) ) {
			foreach ( $this->widget_datas as $widget ) {
				if ( class_exists( $widget ) ) {
					register_widget( $widget );
				}
			}
		}

	}
}