<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the main content area and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
    </div><!-- END CONTAINER -->
</main>

<footer class="site-footer">
    <div class="container">
        <nav class="site-navigation">
            <?php wp_page_menu(); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
        </nav>
    </div><!-- END CONTAINER -->
</footer>

<!-- MAIN JS -->
<script src="js/script.js"></script>

</body>
</html>
