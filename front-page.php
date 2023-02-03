<?php
/*
* Modèle par défaut
*
*/
?>
<!-- Permet d'aller chercher le fichier header.php -->
<?php get_header() ?>

<main>
    <h3>Front Page</h3>
<?php
    // have_posts() - Determines whether current WordPress query has posts to loop over. 
    if (have_posts()):
        // the_post() - Iterate the post index in the loop.
        while (have_posts()) : the_post(); ?>
            <!-- get_permalink() - Retrieves the full permalink for the current post or post ID. Permet d'aller chercher l'adresse du POST -->
            <!-- get_the_title() - Retrieves the post title.  -->
            <h1>
                <a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
            </h1>;
        <hr>
        <?php endwhile;
    endif;
?>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>