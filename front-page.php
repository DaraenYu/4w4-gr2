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
        while (have_posts()) : the_post();
        // get_the_title() - Retrieves the post title.
        echo '<h1>' . get_the_title() . '</h1>';
        // the_content() - Displays the post content.
        // the_content(); ?>

        <hr>
        <?php endwhile;
    endif;
?>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>