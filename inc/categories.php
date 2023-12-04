<?php

/**
 * GroundCTRL Framework
 * WP List Categories.
 * Hey...you can put here your custom code.
 */


if ( ! function_exists( 'groundctrl_modify_wp_list_categories_markup' ) ) :
	function groundctrl_modify_wp_list_categories_markup( $output, $args ) {

		if ( $args['show_count'] === true ) {
			$output = str_replace(
				array( '</a> (', ')' ), 
				array( '</a><span class="count">', '</span>' ),
				$output
			);
		}

		return $output;

	}
endif;
add_filter( 'wp_list_categories', 'groundctrl_modify_wp_list_categories_markup', 10, 2 );
?>