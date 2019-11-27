<?php 

function gutenberg_blocks() {
    wp_register_script('custom-cta-js', // Le nom donné à la commande
        get_template_directory_uri() . '/build/index.js', // Spécifier là où on a enegistré les paramètres
        array('wp-blocks', 'wp-components', 'wp-editor') // On précise que dans le js qu'on a appelé avant, il y aura un appel à une fonction issue de wp-blocks
        );
    register_block_type('namespace/cta-block', array(
        'editor_script' => 'custom-cta-js' // Quel script sera utilisé ? Celui qu'on a appelé juste avant (cf fonction précédente)
    ));

    wp_register_script('custom-donation-cta-js', 
        get_template_directory_uri() . '/build/index.js', 
        array('wp-blocks', 'wp-components', 'wp-editor')
        );
    register_block_type('namespace/donation-cta-block', array(
        'editor_script' => 'custom-donation-cta-js' // Quel script sera utilisé ? Celui qu'on a appelé juste avant (cf fonction précédente)
    ));
}

add_action('init', 'gutenberg_blocks');
/* 
function alecaddd_gutenberg_blocks()
{
    wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks', 'wp-editor', 'wp-components' ));
    register_block_type( 'alecaddd/custom-cta', array(
        'editor_script' => 'custom-cta-js'
    ) );
}
add_action( 'init', 'alecaddd_gutenberg_blocks' ); */
