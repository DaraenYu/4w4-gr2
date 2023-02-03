<?php
    // Enfiler la feuille de style
    function ajouter_styles() {
        wp_enqueue_style(
            'style-principal'/* $handle - Identificateur du lien css*/,
            get_template_directory_uri() . '/style.css'/* $src - Chemin ou se trouve le fichier style.css*/,
            array() /* $deps - Les fichiers CSS qui dependent de style.css*/,
            filemtime(get_template_directory() . '/style.css') /* $ver - Version de notre fichier style.css*/,
        );
    }

    // add_action() - Adds a callback function to an action hook.
    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

    // Enregistrement des menus
    if ( ! function_exists( 'enregistrement_nav_menu' ) ) {
        function enregistrement_nav_menu(){
            register_nav_menus( array(
                'principal' => 'Menu principal',
                'footer'  => 'Menu pied de page'
            ) );
        }
        
        // add_action() - Adds a callback function to an action hook.
        add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
    }
?>