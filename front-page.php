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
    if (have_posts()) :
      // the_post() - Iterate the post index in the loop.
      while (have_posts()) : the_post(); ?>
        <!-- get_template_part() - Permet d'inclure un fichier de modèle stocké dans le dossier "template-parts" d'un thème WordPress -->
        <?php
        $ma_categorie = '4w4';
        if (in_category('galerie')) {
          $ma_categorie = "galerie";
        }
        get_template_part('template-parts/categorie', $ma_categorie) ?>
      <?php endwhile; ?>
    <?php endif;
    ?>
  </section>
</main>

<!-- Permet d'aller chercher le fichier footer.php -->
<?php get_footer(); ?>