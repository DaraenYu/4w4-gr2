<?php
    // 1) Enfiler la feuille de style
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

    // 2) Enregistrement des menus
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

    // 3) add_theme_support() - Registers theme support for a given feature.
    // title-tag - This feature enables plugins and themes to manage the document title tag. This should be used in place of wp_title() function. 
    add_theme_support( 'title-tag' );
    // custom-logo - This feature, first introduced in Version_4.5, enables Theme_Logo support for a theme. 
    add_theme_support( 'custom-logo', array(
        'height' => 150,
        'width'  => 150,
    ) );
    // post-thumbnails - This feature enables Post Thumbnails support for a theme. Note that you can optionally pass a second argument, $args, with an array of the Post Types for which you want to enable this feature. 
    add_theme_support( 'post-thumbnails' );

    /**
     * 4) Modifie la requete principale de Wordpress avant qu'elle soit exécuté
     * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
     * Dépendant de la condition initiale on peut filtrer un type particulier de requête
     * Dans ce cas çi nous filtrons la requête de la page d'accueil
     * @param WP_query  $query la requête principal de WP
     */
    function cidweb_modifie_requete_principal( $query ) {
        // Si on  est dans la page d'accueil et [?] et qu'on est pas dans una page administrateur
        if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
            $query->set('category_name', '4w4');
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
        }
    }
    add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );
?>