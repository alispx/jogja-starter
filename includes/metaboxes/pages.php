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
	'title'       => esc_html__( 'Product Details', 'jogja' ),
	'priority'    => 'high',
	'context'     => 'normal',
	'template'    => array(
		array(
			'type' 			=> 'select',
			'name' 			=> 'product_type',
			'label' 		=> esc_html__( 'Product Type', 'jogja' ),
			'items' 		=> array(
				array(
					'value' => 'watches',
					'label' => esc_html__( 'Watches', 'jogja' ),
				),
				array(
					'value' => 'cars',
					'label' => esc_html__( 'Cars', 'jogja' ),
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
			'title'     => esc_html__( 'Cars Details', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_cars_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'year',
					'label' 		=> esc_html__( 'Year', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'make',
					'label' 		=> esc_html__( 'Make', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'model',
					'label' 		=> esc_html__( 'Model', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'trim',
					'label' 		=> esc_html__( 'Trim', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'mileage',
					'label' 		=> esc_html__( 'Mileage', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'engine',
					'label' 		=> esc_html__( 'Engine', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'exterior_color',
					'label' 		=> esc_html__( 'Exterior Color', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'interior_color',
					'label' 		=> esc_html__( 'Interior Color', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'drive_train',
					'label' 		=> esc_html__( 'Drive Train', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'transmission',
					'label' 		=> esc_html__( 'Transmission', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'body_style',
					'label' 		=> esc_html__( 'Body Style', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'doors',
					'label' 		=> esc_html__( 'Doors', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'wheelbase',
					'label' 		=> esc_html__( 'Wheelbase', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'fuel',
					'label' 		=> esc_html__( 'Fuel', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'stock',
					'label' 		=> esc_html__( 'Stock', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'vin',
					'label' 		=> esc_html__( 'Vin', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dpr',
					'label' 		=> esc_html__( 'DPR', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_basic_info',
			'title'     => esc_html__( 'Basic Info', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'ref_no',
					'label' 		=> esc_html__( 'Ref. No.', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'movement',
					'label' 		=> esc_html__( 'Movement', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_material',
					'label' 		=> esc_html__( 'Case material', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_material',
					'label' 		=> esc_html__( 'Bracelet material', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'year',
					'label' 		=> esc_html__( 'Year', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'condition',
					'label' 		=> esc_html__( 'Condition', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'gender',
					'label' 		=> esc_html__( 'Gender', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'location',
					'label' 		=> esc_html__( 'Location', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'availability',
					'label' 		=> esc_html__( 'Availability', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_caliber_info',
			'title'     => esc_html__( 'Caliber', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'caliber',
					'label' 		=> esc_html__( 'Caliber', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured

		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_case_info',
			'title'     => esc_html__( 'Case', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_material',
					'label' 		=> esc_html__( 'Case material', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'case_diameter',
					'label' 		=> esc_html__( 'Case diameter', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'material_bezel',
					'label' 		=> esc_html__( 'Material bezel', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'glass',
					'label' 		=> esc_html__( 'Glass', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dial',
					'label' 		=> esc_html__( 'Dial', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'dial_numerals',
					'label' 		=> esc_html__( 'Dial numerals', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_bracelet_info',
			'title'     => esc_html__( 'Bracelet/strap', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_material',
					'label' 		=> esc_html__( 'Bracelet material', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'bracelet_color',
					'label' 		=> esc_html__( 'Bracelet color', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'clasp',
					'label' 		=> esc_html__( 'Clasp', 'jogja' ),
				),
				array(
					'type' 			=> 'textbox',
					'name' 			=> 'clasp_material',
					'label' 		=> esc_html__( 'Clasp material', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured

		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'wathces_comments',
			'title'     => esc_html__( 'Comments', 'jogja' ),
			'dependency' => array(
				'field'    => 'product_type',
				'function' => 'upwork_product_type_watches_value',
			),
			'fields'    => array(
				array(
					'type' 			=> 'textarea',
					'name' 			=> 'comments',
					'label' 		=> esc_html__( 'Comments', 'jogja' ),
				),
			) // end of Featured fields
		), // end of Featured

	),
);

new VP_Metabox( $product_details );