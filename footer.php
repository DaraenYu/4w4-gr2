<footer class="site__footer">
    <section>
        <h4>Références</h4>
        <?php wp_nav_menu(array(
            "menu" => "pied2page"
        )) ?>
    </section>
    <section>Item 2</section>
    <section>Item 3</section>
</footer>

<!-- Prints scripts or data before the closing body tag on the front end -->
<?php wp_footer(); ?>
</body>

</html>