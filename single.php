<?php
get_header();
?>
<section class="detail-featured section-gap">
  <div class="container">
    <div class="df-content-box">
      <h1><?php the_title();?></h1>

      <ul class="key-highlights d-flex justify-content-start align-items-center flex-wrap">
        <li>
          <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/bdh-01.svg" alt="">
          <?php
          global $post;
          $author_id = $post->post_author;
          $author_name = get_the_author_meta('nickname', $author_id);
          echo $author_name;
          ?>
        </li>
        <li>
          <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/bdh-02.svg" alt="">
          <?php
            $published_date = get_the_date();
            $formatted_date = $published_date ? date("d M, Y", strtotime($published_date)) : null;
            echo $formatted_date;
         ?>
        </li>
        <li>
          <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/bdh-03.svg" alt="">
          <?php
           $word_count = str_word_count(strip_tags(get_the_content()));
            $reading_time = ceil($word_count / 200); 
            echo $reading_time . ' min';
          ?>
        </li>
        <!-- <li>
          <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/bdh-04.svg" alt="">

        </li> -->
      </ul>
      <?php if(has_post_thumbnail()):?>
      <div class="df-image">
        <img src="<?php echo the_post_thumbnail_url("large")?>" alt="<?php the_title();?>" class="img-fluid">
      </div>
      <?php endif;?>
    </div>
  </div>
</section>

<section class="detail-content-wrapper section-gap">
  <div class="container">
    <div class="content-wrapper">
      <div class="content-box">
        <?php echo the_content();?>
      </div>
      <div class="social-share">
        <?php echo do_shortcode('[Sassy_Social_Share]');?>
      </div>
      <div class="next-prev-wrapper d-flex justify-content-between">
        <div class="prev-wrapper">
          <?php 
      $prev_post = get_previous_post();
      if (!empty($prev_post)): ?>
          <a href="<?php echo get_permalink($prev_post->ID); ?>">
            <span>Previous</span>
            <p class="d-none d-lg-block"><?php echo $prev_post->post_title; ?></p>
          </a>
          <?php endif; ?>
        </div>
        <div class="next-wrapper text-end">
          <?php 
      $next_post = get_next_post();
      if (!empty($next_post)): ?>
          <a href="<?php echo get_permalink($next_post->ID); ?>">
            <span>Next</span>
            <p class="d-none d-lg-block"><?php echo $next_post->post_title; ?></p>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
get_template_part("/template-parts/related-post", null);
get_footer();
?>