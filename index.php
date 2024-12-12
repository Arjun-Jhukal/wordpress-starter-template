<?php

/**
 * Template Name: Default template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */

get_header();
?>
<?php the_content(); ?>

<?php get_footer() ?>