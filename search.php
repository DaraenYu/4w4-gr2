<?php
/*
* Modèle par défaut
*
*/
?>
<!-- Permet d'aller chercher le fichier header.php -->
<?php get_header() ?>

<main>
    <h3>Résultat de la recherche</h3>
    <?php
        // have_posts() - Determines whether current WordPress query has posts to loop over. 
        if (have_posts()):
            // the_post() - Iterate the post index in the loop.
            while (have_posts()) : the_post();
                // the_title() - Displays or retrieves the current post title with optional markup.
                // the_title('<h4>', '</h4>');?>
                <!-- mb_strimwidth - Get truncated string with specified width -->
                <h4><?= mb_strimwidth(get_the_title(), 7, 50, "..."); ?></h4>
                <!-- On raccourci le texte de la recherche -->
                <p><?= wp_trim_words(get_the_excerpt(), 50, "..."); ?></p>
            <hr>
            <?php endwhile;
        endif;
    ?>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>