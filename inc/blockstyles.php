<?php

/**
 * GroundCTRL Framework
 * Block Styles.
 * Hey...you can put here your custom code.
 */


if (! function_exists('groundctrl_block_styles')) : function groundctrl_block_styles(){

    // Register Styles for Blocks
    $core_block_styles = apply_filters( 'groundctrl_wp_enqueue_block_styles_blocks', array(
            'categories', 
			'comments', 
			'gallery', 
			'navigation', 
			'post-comments-form', 
			'post-navigation-link', 
			'pullquote', 
			'search'        
    ));

    foreach($core_block_styles as $block_name){
        wp_enqueue_block_style(
            'core/' . $block_name,
				array(
					'handle' => 'groundctrl-' . $block_name . '-style',
					'src'    => get_theme_file_uri( 'assets/css/' . $block_name . '.css' ),
					'ver'    => wp_get_theme( 'groundctrl' )->get( 'Version' ),
					'path'   => get_theme_file_path( 'assets/css/' . $block_name . '.css' ),
            )
         );
    }

    // Register Block Styles
    $desatured_style_blocks = array (
        'core/avatar', 'core/image', 'core/post-featured-image'
    );

    foreach ( $desatured_style_blocks as $block_name ) {
        register_block_style(
            $block_name,
            array(
                'name'         => 'desaturated',
                'label'        => __( 'Desaturated', 'groundctrl' ),
                'inline_style' => ".is-style-desaturated { mix-blend-mode: luminosity; }",
            )
        );
    }

    register_block_style(
        'core/column',
        array(
            'name'         => 'aspect-ratio-1-1',
            'label'        => __( '1:1 Aspect Ratio', 'groundctrl' ),
            'inline_style' => ".is-style-aspect-ratio-1-1 { aspect-ratio: 1/1; }",
        )
    );

    register_block_style(
        'core/column',
        array(
            'name'         => 'aspect-ratio-4-3',
            'label'        => __( '4:3 Aspect Ratio', 'groundctrl' ),
            'inline_style' => ".is-style-aspect-ratio-4-3 { aspect-ratio: 4/3; }",
        )
    );

    register_block_style(
        'core/post-terms',
        array(
            'name'         => 'pill-shape-with-border',
            'label'        => __( 'Pill Shape With Border', 'groundctrl' ),
            'inline_style' => "
            .wp-block-post-terms.is-style-pill-shape-with-border {
                display: flex;
                flex-wrap: wrap;
                gap: .75em;
            }
            .wp-block-post-terms.is-style-pill-shape-with-border a {
                border: 1px solid var( --wp--preset--color--30 ) !important;
                border-radius: 999px;
                padding: .44em 1em;
            }
            .is-style-pill-shape-with-border .wp-block-post-terms__separator {
                display: none;
            }",
        )
    );

    register_block_style(
        'core/post-date',
        array(
            'name'         => 'pill-shape',
            'label'        => __( 'Pill Shape', 'groundctrl' ),
            'inline_style' => "
            .wp-block-post-date.is-style-pill-shape {
                border-radius: 99px;
            }",
        )
    );

    register_block_style(
        'core/query-pagination',
        array(
            'name'         => 'groundctrl-pagination',
            'label'        => __( 'Retroshock Pagination', 'groundctrl' ),
            'inline_style' => "
            :root .is-style-groundctrl-pagination > *,
            .is-style-groundctrl-pagination [class*=\"is-arrow-\"]:only-child {
                margin: 0;
            }

            .wp-block-query-pagination,
            .is-style-groundctrl-pagination .wp-block-query-pagination-numbers {
                display: flex;
                flex-wrap: wrap;
                gap: .66em;
            }

            .is-style-groundctrl-pagination > a,
            .is-style-groundctrl-pagination .wp-block-query-pagination-numbers > * { 
                align-items: center;
                border: 1px solid var( --wp--preset--color--30 );
                border-radius: 50%;
                display: flex;
                height: 2em;
                justify-content: center;
                margin: 0;
                width: 2em;
            }

            .is-style-groundctrl-pagination a:hover,
            .is-style-groundctrl-pagination .wp-block-query-pagination-numbers .current {
                border-color: var( --wp--preset--color--30 );
            }",
        )
    );

    register_block_style(
        'core/quote',
        array(
            'name'         => 'has-quotation-mark',
            'label'        => __( 'Quotation Mark', 'groundctrl' ),
            'inline_style' => "",
        )
    );

    register_block_style(
        'core/social-links',
        array(
            'name'         => 'pill-shape-with-border',
            'label'        => __( 'Default With Border', 'groundctrl' ),
            'inline_style' => "
            :root .is-style-pill-shape-with-border .wp-block-social-link-anchor {
                border: 1px solid var( --wp--preset--color--30 ) !important;
                border-radius: 999px;
                padding: .33em;
            }",
        )
    );
}
endif;
add_action( 'init', 'groundctrl_block_styles' );

?>