<?php

function theme_enqueue_styles() {
    $parent_style = 'storefront-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* Unhook Woocommerce sidebar 
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);*/

/* Remove Woocommerce sidebar
add_action( 'init', 'custom_remove_woocommerce_sidebar', 10 );
function custom_remove_woocommerce_sidebar () {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}  */

/* Remove Items from the Header 
add_action( 'init', 'custom_remove_headeritems', 10 );
function custom_remove_headeritems () {
    remove_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
    remove_action( 'storefront_header', 'storefront_product_search', 40 );
} 

*/

/* Change Storefront Footer Credit */
add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 
function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div><!-- .site-info -->
	<?php
}
