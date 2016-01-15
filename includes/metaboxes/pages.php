<?php

/**
 * product type value cars
 *
 * @return void
 * @author alispx
 **/
function upwork_product_type_cars_value( $value ) {
	if ( $value === 'cars' ) 
		return true;
	return false;	
}
VP_Security::instance()->whitelist_function( 'upwork_product_type_cars_value' );

/**
 * product type value watches
 *
 * @return void
 * @author alispx
 **/
function upwork_product_type_watches_value( $value ) {
	if ( $value === 'watches' ) 
		return true;
	return false;	
}
VP_Security::instance()->whitelist_function( 'upwork_product_type_watches_value' );

$product_details = array(
	'id'          => 'upwork_page_options',
	'types'       => array( 'page' ),
	'title'       => esc_html__( 'Product Details', 'divi' ),
	'priority'    => 'high',
	'context'     => 'normal',
	'template'    => array(
		array(
			'type' 			=> 'select',
			'name' 			=> 'product_type',
			'label' 		=> esc_html__( 'Product Type', 'divi' ),
			'items' 		=> array(
				array(
					'value' => 'watches',
					'label' => esc_html__( 'Watches', 'divi' ),
				),
				array(
					'value' => 'cars',
					'label' => esc_html__( 'Cars', 'divi' ),
				),
			),
			'default' => array(
				'cars',
			),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'cars_details',
			'title'     => esc_html__( 'Cars Details', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_cars_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'year',
					'label' 		=> esc_html__( 'Year', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'make',
					'label' 		=> esc_html__( 'Make', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'model',
					'label' 		=> esc_html__( 'Model', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'trim',
					'label' 		=> esc_html__( 'Trim', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'mileage',
					'label' 		=> esc_html__( 'Mileage', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'engine',
					'label' 		=> esc_html__( 'Engine', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'exterior_color',
					'label' 		=> esc_html__( 'Exterior Color', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'interior_color',
					'label' 		=> esc_html__( 'Interior Color', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'drive_train',
					'label' 		=> esc_html__( 'Drive Train', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'transmission',
					'label' 		=> esc_html__( 'Transmission', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'body_style',
					'label' 		=> esc_html__( 'Body Style', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'doors',
					'label' 		=> esc_html__( 'Doors', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'wheelbase',
					'label' 		=> esc_html__( 'Wheelbase', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'fuel',
					'label' 		=> esc_html__( 'Fuel', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'stock',
					'label' 		=> esc_html__( 'Stock', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'vin',
					'label' 		=> esc_html__( 'Vin', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dpr',
					'label' 		=> esc_html__( 'DPR', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_basic_info',
			'title'     => esc_html__( 'Basic Info', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'ref_no',
					'label' 		=> esc_html__( 'Ref. No.', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'movement',
					'label' 		=> esc_html__( 'Movement', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_material',
					'label' 		=> esc_html__( 'Case material', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_material',
					'label' 		=> esc_html__( 'Bracelet material', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'year',
					'label' 		=> esc_html__( 'Year', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'condition',
					'label' 		=> esc_html__( 'Condition', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'gender',
					'label' 		=> esc_html__( 'Gender', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'location',
					'label' 		=> esc_html__( 'Location', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'availability',
					'label' 		=> esc_html__( 'Availability', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_caliber_info',
			'title'     => esc_html__( 'Caliber', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'caliber',
					'label' 		=> esc_html__( 'Caliber', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured

		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_case_info',
			'title'     => esc_html__( 'Case', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_material',
					'label' 		=> esc_html__( 'Case material', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_diameter',
					'label' 		=> esc_html__( 'Case diameter', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'material_bezel',
					'label' 		=> esc_html__( 'Material bezel', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'glass',
					'label' 		=> esc_html__( 'Glass', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dial',
					'label' 		=> esc_html__( 'Dial', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dial_numerals',
					'label' 		=> esc_html__( 'Dial numerals', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_bracelet_info',
			'title'     => esc_html__( 'Bracelet/strap', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_material',
					'label' 		=> esc_html__( 'Bracelet material', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_color',
					'label' 		=> esc_html__( 'Bracelet color', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'clasp',
					'label' 		=> esc_html__( 'Clasp', 'divi' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'clasp_material',
					'label' 		=> esc_html__( 'Clasp material', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured

		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_comments',
			'title'     => esc_html__( 'Comments', 'tokokoo' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textarea',
					'name' 			=> 'comments',
					'label' 		=> esc_html__( 'Comments', 'divi' ),
				),
			) // end of Featured fields
		), // end of Featured

	),
);

new VP_Metabox( $product_details );