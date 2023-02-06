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

    // add_theme_support() - Registers theme support for a given feature.
    // title-tag - This feature enables plugins and themes to manage the document title tag. This should be used in place of wp_title() function. 
    add_theme_support( 'title-tag' );
    // custom-logo - This feature, first introduced in Version_4.5, enables Theme_Logo support for a theme. 
    add_theme_support( 'custom-logo', array(
        'height' => 150,
        'width'  => 150,
    ) );
    // post-thumbnails - This feature enables Post Thumbnails support for a theme. Note that you can optionally pass a second argument, $args, with an array of the Post Types for which you want to enable this feature. 
    add_theme_support( 'post-thumbnails' );
?>