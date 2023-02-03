<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Prints scripts or data in the head tag on the front end -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- wp_nav_menu() - Displays a navigation menu. -->
        <?php wp_nav_menu(array(
            "menu" => "entete"
        )) ?>

        <!-- bloginfo() - Permet d'afficher des informations sur votre site WordPress, telles que le titre, la description, l'url, etc. -->
        <!-- Va chercher le Titre du site et le Slogan du site. Lorsqu'on clique sur le nom du site, on peut revenir à la page d'accueil -->
        <h1> <a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a> </h1> - <h2><?= bloginfo('description') ?></h2>
    </header>