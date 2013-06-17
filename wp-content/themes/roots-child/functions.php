<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/rewrites.php');        // URL rewriting for assets
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions
add_theme_support( 'post-thumbnails' );
add_image_size( 'dv-thumb-350', 350, 200, true);

show_admin_bar(false);


function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );