<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mycustomtheme-wp
 */

get_header(); ?>


    <!-- Start the Loop. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php the_content(); ?>

    <!-- Stop The Loop (but note the "else:" - see next line). -->
    <?php endwhile; else : ?>


    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


    <!-- REALLY stop The Loop. -->
    <?php endif; ?>



<?php get_footer(); ?>
