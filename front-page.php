<?php
/*
* Modèle front-page par défaut
*
*/
?>
<!-- Permet d'aller chercher le fichier header.php -->
<?php get_header() ?>

<main>
    <section class="blocflex">
        <?php
            // have_posts() - Determines whether current WordPress query has posts to loop over. 
            if (have_posts()):
                // the_post() - Iterate the post index in the loop.
                while (have_posts()) : the_post(); ?>
                    <!-- get_permalink() - Retrieves the full permalink for the current post or post ID. Permet d'aller chercher l'adresse du POST -->
                    <!-- get_the_title() - Retrieves the post title.  -->
                    <article>
                        <h4>
                            <a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
                        </h4>

                        <!-- Si la categorie est cours, affiche tous les articles avec un slug cours -->
                        <p><?php if(is_category('cours')) echo "cours"; ?></p>

                        <!-- wp_trim_words( $text, $num_words, $more, $original_text ) - Cette fonction permet de spécifier le nombre de caractère maximum à afficher en résumé -->
                        <!-- get_the_excerpt() - Cette fonction permet de récupérer un extrait (résumé) d'un article sans l'afficher. -->
                        <p><?= wp_trim_words(get_the_excerpt(), 10, "<span>&#127829;</span>"); ?></p>
                    </article>
                <?php endwhile;
            endif;
        ?>
    </section>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>