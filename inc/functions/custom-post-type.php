<?php

/** Test */
/* function register_team_member_post_type() {
    register_post_type(
        'team_member',
        [
            'public' => true,
            'label' => 'Membre'
        ]
        );
}

add_action('init', 'register_team_member_post_type'); */

/**
 * Custom Post Type: Team Members (STAFF de l'ONG)
 */
function team_member_custom_post_type() {

	// Permet de remplacer le texte des boutons de la partie Admin. Au lieu de 'Ajouter un article', on aura 'Ajouter une nouvelle vidéo'
	$labels = array(
		'name'                => _x( 'Membres de l\'équipe', 'Post Type General Name'),
		'singular_name'       => _x( 'Membre de l\'équipe', 'Post Type Singular Name'),
		'menu_name'           => __( 'Membre actifs'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les membres'),
		'view_item'           => __( 'Voir les membres'),
		'add_new_item'        => __( 'Ajouter un nouveau membre'),
		'add_new'             => __( 'Ajouter un membre'),
		'edit_item'           => __( 'Editer le membre'),
		'update_item'         => __( 'Modifier le membre'),
		'search_items'        => __( 'Rechercher un membre'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// Options
	
	$args = array(
		'label'               => __( 'Membre actif'),
		'description'         => __( 'Toutes les membres'),
    'labels'              => $labels,
    'menu_icon'           => 'dashicons-groups',
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
    'menu_position'       => 5

	);

	register_post_type( 'team_member', $args );
}
add_action( 'init', 'team_member_custom_post_type', 0 );