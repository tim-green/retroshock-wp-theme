<?php

/**
 * GroundCTRL Framework
 * Block Patterns.
 * Hey...you can put here your custom code.
 */

 if ( ! function_exists( 'groundctrl_register_block_patterns' ) ) :
	function groundctrl_register_block_patterns() {

		// The block pattern categories included in Retroshock.
		$groundctrl_block_pattern_categories = apply_filters( 'groundctrl_block_pattern_categories', array(
			'groundctrl'  => array(
				'label'			=> esc_html__( 'Retroshock - All', 'groundctrl' ),
			),
			'groundctrl-cta'  => array(
				'label'			=> esc_html__( 'Retroshock - Call to Action', 'groundctrl' ),
			),
			'groundctrl-general' => array(
				'label'			=> esc_html__( 'Retroshock - General', 'groundctrl' ),
			),
			'groundctrl-hero' => array(
				'label'			=> esc_html__( 'Retroshock - Hero', 'groundctrl' ),
			),
			'groundctrl-media' => array(
				'label'			=> esc_html__( 'Retroshock - Media', 'groundctrl' ),
			),
		) );

		// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
		uasort( $groundctrl_block_pattern_categories, function( $a, $b ) { 
			return strcmp( $a["label"], $b["label"] ); }
		);

		// Register block pattern categories.
		foreach ( $groundctrl_block_pattern_categories as $slug => $settings ) {
			register_block_pattern_category( $slug, $settings );
		}

	}
endif;
add_action( 'init', 'groundctrl_register_block_patterns' );

?>