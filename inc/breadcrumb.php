<?php

function the_breadcrumb() {
    if (is_front_page() || is_page('home') || is_404()) {
        return; 
    }

    $sep = ' / '; // Separator
    echo '<div class="breadcrumbs"><a href="' . home_url() . '">Home</a>' . $sep;

    if (is_category()) {
        // Display category name
        single_cat_title();
    } elseif (is_single()) {
        // Display category and post title for single posts
        $categories = get_the_category();
        if ($categories) {
            $first_category = $categories[0];
            echo '<a href="' . get_category_link($first_category->term_id) . '">' . $first_category->name . '</a>' . $sep;
        }
        the_title();
    } elseif (is_page() && !is_front_page()) {
        // Display static page title
        the_title();
    } elseif (is_archive()) {
        // Display archive title (year, month, day, etc.)
        the_archive_title();
    } elseif (is_home()) {
        // Display posts page title
        echo get_the_title(get_option('page_for_posts'));
    }

    echo '</div>'; // End breadcrumbs container
}