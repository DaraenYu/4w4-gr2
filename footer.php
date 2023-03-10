<footer class="site__footer">
  <section>
    <h4>Références</h4>
    <?php wp_nav_menu(array(
      "menu" => "pied2page"
    )) ?>
  </section>
  <section>
    <h4>Informations</h4>
  </section>
</footer>

<!-- Prints scripts or data before the closing body tag on the front end -->
<?php wp_footer(); ?>
</body>

</html>