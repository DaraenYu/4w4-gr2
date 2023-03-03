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
      'category_name' => $category->slug,
      'orderby' => 'title',
      'order' => 'ASC'
    );
    $query = new WP_Query($args);
    // have_posts() - Determines whether current WordPress query has posts to loop over. 
    if ($query->have_posts()) :
      // the_post() - Iterate the post index in the loop.
      while ($query->have_posts()) : $query->the_post(); ?>
        <!-- get_template_part() - Permet d'inclure un fichier de modèle stocké dans le dossier "template-parts" d'un thème WordPress -->
        <?php get_template_part('template-parts/categorie', $category->slug) ?>
      <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata();
    ?>
  </section>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>