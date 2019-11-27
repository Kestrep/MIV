<?php

/**
 * Titre détenue dans l'association
 */

// On initie la meta si la fonction existe
function team_member_init_meta() {
    add_meta_box('member_function', 'Fonction dans l\'organisation', 'team_member_render_metabox', 'team_member', 'side');
}

// Callback pour afficher la meta dans la partie édition
function team_member_render_metabox() {
    
    // On récupère la valeur de la meta
    global $post; # $post est la variable globale qu'utilise Wordpress
    $value = get_post_meta($post->ID, 'member_function', true);
    
    // On procède à l'affichage de la partie admin
    ?>
    <div class="meta-box-item-title">Ecrire la fonction du membre dans l'organisation</div>
    <div class="meta-box-item-content">
        <input type="text" name="member_function" id="member_function" value="<?= $value ?>" style="width: 100%;">
    </div>

    <!-- Créer un nonce pour être sûr que l\'article est sauvegardé à la main -->
    <input type="hidden" name="member_function_nonce" value="<?= wp_create_nonce('member_function'); ?>" >
    <?php

}

// Callback d\'enregistrement
function team_member_save_meta($post_id) {
    // Les conditions pour enregistrer, update et delete
    if (
        !isset($_POST['member_function']) || # La meta_box n'est initiée que pour les posts (voir add_meta_box(..., 'post'); )
        (defined('DOING_AUTOSAVE') && 'DOING_AUTOSAVE' ) || # Pendant les sauvegarde automatique
        /* Si la variable existe et qu'elle est true */
        (defined('DOING_AJAX') && 'DOING_AJAX' ) # Pendant les sauvegardes AJAX
    ) {
        return false;
    } # Arrête le script

    //Vérifier que l'utilisateur peut éditer un article
    if(!current_user_can('edit_post')) {return false;}

    // On vérifie le nonce avec la clé renseignée dans le formulaire
    if(!wp_verify_nonce($_POST['member_function_nonce'], 'member_function')) {return false;}

    // var_dump($_POST); # Pour afficher le contenu du POST
    
    // CRUD de la meta
    if(get_post_meta($post_id, 'member_function')){ # Si déjà une meta, on update
        update_post_meta($post_id, 'member_function', $_POST['member_function']);
    } else if ($_POST['member_function'] === '') { # Si pas de valeur renseignée, on supprime
        delete_post_meta($post_id, 'member_function', $_POST['member_function']);
    } else { # Sinon, on ajoute une meta
        add_post_meta($post_id, 'member_function', $_POST['member_function']);
    }
}


add_action('admin_init', 'team_member_init_meta'); # Hook s'active lorsqu'on édite
add_action('save_post', 'team_member_save_meta'); # Hook s'active lorsqu'on sauvegarde une édition, !! S'active aussi pour les pages
