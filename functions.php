<?php
$VERSION = '0.0.1';

function setup() {
    
    # Config
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    # Menu
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'Principal' ), // Menu principal
    ) );
}
add_action( 'after_setup_theme', 'setup' );


/**
 * Chargement des scripts
 */
function scripts() {
    global $VERSION;

    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'style-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css' );
    wp_enqueue_script( 'script-js' , get_template_directory_uri() . '/assets/js/main.js', array(), $VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'scripts' );

/**
 * Custom menus
 */
require get_template_directory() . '/inc/functions/menus.php';

/**
 * Custom Post Type : Team Member
 */
require get_template_directory() . '/inc/functions/custom-post-type.php';

/**
 * Custom Fields
 */
require get_template_directory() . '/inc/functions/custom-fields.php';



/**
 * Custom Gutenberg blocks
 */
require get_template_directory() . '/inc/gutenberg.php';

