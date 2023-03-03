<!-- Modification des titres de chaque article lorsque nous sommes dans la category 'cours' -->
<!-- get_the_title() - Retrieves the post title.  -->
<?php
  $titre = get_the_title();
  $titre_long = substr($titre, 7, -5);
  $sigle = substr($titre, 0, 7);
  // $duree = substr($titre, 60, 0);
?>

<article class="blocflex__article">
  <h4>
    <!-- get_permalink() - Retrieves the full permalink for the current post or post ID. Permet d'aller chercher l'adresse du POST -->
    <a href="<?= get_permalink(); ?>"><?= $sigle; ?></a>
    <h4><?= $titre_long; ?></h4>
  </h4>

  <!-- wp_trim_words( $text, $num_words, $more, $original_text ) - Cette fonction permet de spécifier le nombre de caractère maximum à afficher en résumé -->
  <!-- get_the_excerpt() - Cette fonction permet de récupérer un extrait (résumé) d'un article sans l'afficher. -->
  <p><?= wp_trim_words(get_the_excerpt(), 10, "&#127829;"); ?></p>
</article>