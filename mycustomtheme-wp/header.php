<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until the main content area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo( 'name' ); ?></title>

<!-- HTML5 -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- VIEWPORT FOR MOBILE -->
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- MAIN CSS FILE -->
<link href="css/style.css" rel="stylesheet" type="text/css" />



</head>

<body>

<header class="site-header toggle-nav">
    <div class="container">
        <div class="site-branding">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <nav class="site-navigation ">
            <div class="menu navicon">Menu</div>
            <?php wp_page_menu(); ?>
        </nav>
    </div><!-- END CONTAINER -->
</header>

<main class="site-main">
    <div class="container">
