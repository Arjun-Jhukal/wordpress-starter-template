<?php

/**
 * Template Name: Archive template
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */

get_header();
?>

<section class="blogs section-gap">
  <div class="container">
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>

    <div class="blog-listing">
      <div class="row">
        <div class="col-lg-8">
          <?php
         
          $paged = get_query_var('paged') ? get_query_var('paged') : 1; 
          $args = [
              'post_type' => 'post', 
              'post_status' => 'publish', // Only published posts
              'posts_per_page' => 8, 
              'paged' => $paged, 
          ];

          $query = new WP_Query($args);

         
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
                    <ul class="d-flex justify-content-start">
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
            <div class="ba-block">
              <h3>Categories</h3>
              <ul>
                <?php
                // Display categories dynamically
                $categories = get_categories([
                    'hide_empty' => true, // Show only categories with posts
                ]);
                foreach ($categories as $category) :
                ?>
                <li>
                  <a href="<?php echo get_category_link($category->term_id); ?>">
                    <?php echo $category->name; ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
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