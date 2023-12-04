<?php

/**
 *  GroundCTRL Framework 
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 */

//$theme_version = '1.0.0';

/* Theme Setup */
require_once get_template_directory() . '/inc/setup.php'; 

/* Include CSS & JavaScript */
require_once get_template_directory() . '/inc/enqueues.php'; 

// Block Patterns
require_once get_template_directory() . '/inc/blockpatterns.php'; 

// Block Styles
require_once get_template_directory() . '/inc/blockstyles.php'; 

/* Register Categories */
require_once get_template_directory() . '/inc/categories.php'; 

/* Register navmenus */
require_once get_template_directory() . '/inc/navmenus.php'; 

/* Various global functions */
require_once get_template_directory() . '/inc/global.php'; 
