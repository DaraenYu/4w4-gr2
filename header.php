<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Prints scripts or data in the head tag on the front end -->
    <?php wp_head(); ?>
</head>

<body class="site">
    <header class="site__header">
        <!-- bloginfo() - Permet d'afficher des informations sur votre site WordPress, telles que le titre, la description, l'url, etc. -->
        <!-- Va chercher le Titre du site et le Slogan du site. Lorsqu'on clique sur le nom du site, on peut revenir à la page d'accueil -->
        <!-- <h1> <a href=" bloginfo('url') "> bloginfo('name') </a> </h1>--><h1><?= bloginfo('description') ?></h1>
        <section class="site__header__logo" >
            <!-- the_custom_logo() - Displays a custom logo, linked to home unless the theme supports removing the link on the home page. -->
            <?php the_custom_logo(); ?>
            <!-- wp_nav_menu() - Displays a navigation menu. -->
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
            )) ?>
            <!-- Ajout de la fonction qui permet la recherche -->
            <?php get_search_form() ?>
        </section>
    </header>
    <aside class="site__aside">
        <h3>Menu Secondaire</h3>
        <?php 
            wp_nav_menu(array(
                "menu" => "aside",
                "conteneur" => "nav"
            ));
        ?>
    </aside>