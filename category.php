<?php
/*
* Modèle category par défaut
*
*/
?>
<!-- Permet d'aller chercher le fichier header.php -->
<?php get_header() ?>

<main>
    <section class="blocflex">
        <?php
            // Intégration de la classe WP_Query() - La classe WP_Query() permet de récupérer des publications (articles, pages, types de publications personnalisés, etc.) en fonction de divers critères, tels que les catégories, les balises, les dates, les auteurs, etc.
            $category = get_queried_object();
            $args = array(
                'category_name' => $category -> slug,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);
            // have_posts() - Determines whether current WordPress query has posts to loop over. 
            if ($query -> have_posts()):
                // the_post() - Iterate the post index in the loop.
                while ($query -> have_posts()) : $query -> the_post(); ?>
                    <!-- get_permalink() - Retrieves the full permalink for the current post or post ID. Permet d'aller chercher l'adresse du POST -->
                    <!-- get_the_title() - Retrieves the post title.  -->
                    <article>
                        <h4>
                            <a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
                        </h4>

                        <!-- wp_trim_words( $text, $num_words, $more, $original_text ) - Cette fonction permet de spécifier le nombre de caractère maximum à afficher en résumé -->
                        <!-- get_the_excerpt() - Cette fonction permet de récupérer un extrait (résumé) d'un article sans l'afficher. -->
                        <p><?= wp_trim_words(get_the_excerpt(), 10, "&#127829;"); ?></p>
                    </article>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        ?>
    </section>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>