<aside class="site__aside">
  <h3>Menu Secondaire</h3>
  <?php
  // Affichade du Aside adaptatif
  $ma_categorie = "4w4";

  if (in_category('cours')) {
    $ma_categorie = "cours";
  }

  wp_nav_menu(array(
    "menu" => $ma_categorie,
    "conteneur" => "nav"
  ));
  ?>
</aside>