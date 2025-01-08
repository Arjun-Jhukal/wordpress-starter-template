<?php

/**
 * Template Name: Archive template
 *
 *  
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */

get_header();
?>

<section class="blogs section-gap">
  <div class="container">
    <?php if(is_page()):?>
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
    <?php endif;?>

    <div class="blog-listing">
      <div class="row">
        <div class="col-lg-8">
          <?php
           $paged = max(1, get_query_var('paged'));
            $args = [
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 8,
              'paged' => $paged,
            ];
              if (is_category()) {
                $args['cat'] = get_queried_object_id();
              }
          
              if (is_archive()) {
                if (get_query_var('year')) {
                  $args['year'] = get_query_var('year');
                }
                if (get_query_var('monthnum')) {
                  $args['monthnum'] = get_query_var('monthnum');
                }
              }

          
              if (is_home() || is_archive() || is_category()) {
                $query = $wp_query;
              } else {
                $query = new WP_Query($args);
              }

          // Check if there are posts
          if ($query->have_posts()) :
          ?>
          <div class="row">
            <?php  while ($query->have_posts()) : $query->the_post();?>
            <div class="col-md-6">
              <article class="blog-single d-flex flex-column">
                <?php if(has_post_thumbnail()):?>
                <div class="bs-image">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo the_post_thumbnail_url('md');?>" alt="<?php the_title();?>" class="img-fluid">
                  </a>
                </div>
                <?php endif;?>
                <div class="bs-content-wrapper h-100 d-flex flex-column justify-content-between">
                  <div class="bs-content">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <?php if(the_excerpt()):?>
                    <p><?php the_excerpt(); ?></p>
                    <?php endif;?>
                  </div>
                  <div class="bs-info">
                    <ul class="d-flex justify-content-between">
                      <?php if(get_the_date()):?>
                      <li>
                        <?php
                        $date=get_the_date();
                        $formatted_date=$date ? date("d M, Y",strtotime($date)):null
                         ?>
                        <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/calendar.svg" alt="">
                        <small><?php echo $formatted_date; ?></small>
                      </li>
                      <?php endif;?>
                      <li>
                        <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/clock.svg" alt="">
                        <small>
                          <?php
                          $word_count = str_word_count(strip_tags(get_the_content()));
                          $reading_time = ceil($word_count / 200); 
                          echo $reading_time . ' min';
                          ?>
                        </small>
                      </li>
                      <li>
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/article-arrow.svg" alt="">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <?php  endwhile;?>
          </div>
          <?php
              // Pagination
              echo '<div class="pagination">';
              echo paginate_links([
                  'total' => $query->max_num_pages,
                  'current' => $paged,
                  'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M4.5 12.625L9.5 7L4.5 1.375" stroke="#1C1D1D" stroke-width="1.875" stroke-linecap="round"/>
                </svg>',
                  'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M4.5 12.625L9.5 7L4.5 1.375" stroke="#1C1D1D" stroke-width="1.875" stroke-linecap="round"/>
                </svg>',
              ]);
              echo '</div>';
          
          endif;

          // Restore original Post Data
          wp_reset_postdata();
          ?>
        </div>
        <div class="col-lg-4">
          <aside class="blog-aside">
            <div class="mobile-toc-controller d-lg-none">
              <strong>
                <?php
                $menu_name = 'quick-links';
                $menu = wp_get_nav_menu_object($menu_name);
                echo $menu ? esc_html($menu->name) : 'Menu';
                ?>
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/angle-down.svg" alt="">
              </strong>
            </div>
            <div class="blocks-wrapper">
              <div class="ba-block">
                <h3>Categories</h3>
                <ul>
                  <?php
                $categories = get_terms(['taxonomy' => 'category', 'hide_empty' => true]);
                foreach ($categories as $category):
                  echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a></li>';
                endforeach;
                ?>
                </ul>
              </div>
              <div class="ba-block">
                <h3>Archive</h3>
                <ul>
                  <?php
                wp_get_archives([
                'type'            => 'yearly', // Archive by year
                'limit'           => '',      // No limit on the number of years
                'format'          => 'html',  // HTML format for list items
                'before'          => '',      // Content before each item
                'after'           => '',      // Content after each item
                'show_post_count' => false,   // Whether to show the post count
                ]);
                ?>
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>