<?php

/**
 * Images Loader
 *
 * @return void
 * @author jogja
 **/
class Jogja_Images_Loader {

	private $image_datas;
	/**
	 * Depending of the child class, will install the given
	 * config properties.
	 */
	public function __construct() {

		$this->image_datas = include( JOGJA_THEME_INCLUDES_DIR . '/config/images.php' );

		$this->add_images();
		// Add sizes to the media attachment settings dropdown list.
		add_filter( 'image_size_names_choose', array( $this, 'add_image_to_dropdown_list' ) );
	}

	/**
	 * Loop through the registered image sizes and add them.
	 *
	 * @return void
	 */
	private function add_images() {
		if ( ! empty( $this->datas ) ) {
			foreach ( $this->image_datas as $slug => $properties ) {
				list( $width, $height, $crop ) = $properties;
				add_image_size( $slug, $width, $height, $crop );
			}
		}
	}

	/**
	 * Add image sizes to the media size dropdown list.
	 *
	 * @param array $sizes The existing sizes.
	 * @return array
	 */
	public static function add_image_to_dropdown_list( array $sizes ) {
		$new = array();

		if ( ! empty( $this->datas ) ) {
			foreach ( $this->datas as $slug => $properties ) {
				// If no 4th option, stop the loop.
				if ( 4 !== count( $properties ) ) break;

				$show = array_pop( $properties );

				if ( $show ) {
					$new[$slug] = static::label( $slug );
				}
			}
		}

		return array_merge( $sizes, $new );
	}

	/**
	 * Clean the image slug for display.
	 * Remove '-', '_' and set first character to uppercase.
	 *
	 * @param string $text The text to clean.
	 * @return string
	 */
	private static function label( $text ) {
		return ucwords( str_replace( array( '-', '_' ), ' ', $text ) );
	}
}