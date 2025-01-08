<?php
$isEnabled = get_field('enable_related_post');
$section_title = get_field('related_post_section_title');
$selected_post = get_field('select_related_post');

// Fallback to latest 3 posts if no posts are selected
if (empty($selected_post)) {
    $selected_post = get_posts(array(
        'posts_per_page' => 3,
        'post_status' => 'publish'
    ));
}
?>
<?php if ($isEnabled): ?>
<section class="related-post section-padding-y bg-white-400">
  <div class="container">
    <?php if ($section_title): ?>
    <div class="section-title">
      <h2><?php echo esc_html($section_title); ?></h2>
    </div>
    <?php endif; ?>

    <?php if (!empty($selected_post)): ?>
    <div class="row">
      <?php foreach ($selected_post as $index => $post): setup_postdata($post); ?>
      <div class="col-lg-4 col-md-6 <?php echo $index === 2 ? 'd-md-none d-lg-block' : ''; ?>">
        <article class="blog-single d-flex flex-column">
          <?php if (has_post_thumbnail()): ?>
          <div class="bs-image">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'md')); ?>"
                alt="<?php echo esc_attr(get_the_title($post->ID)); ?>" class="img-fluid">
            </a>
          </div>
          <?php endif; ?>
          <div class="bs-content-wrapper h-100 d-flex flex-column justify-content-between">
            <div class="bs-content">
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php if (has_excerpt()): ?>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
              <?php endif; ?>
            </div>
            <div class="bs-info">
              <ul class="d-flex justify-content-between">
                <?php if (get_the_date()): ?>
                <li>
                  <?php 
                    $formatted_date = date("d M, Y", strtotime(get_the_date())); 
                    ?>
                  <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/calendar.svg')); ?>" alt="">
                  <small><?php echo esc_html($formatted_date); ?></small>
                </li>
                <?php endif; ?>
                <li>
                  <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/clock.svg')); ?>" alt="">
                  <small>
                    <?php
                      $word_count = str_word_count(strip_tags(get_the_content()));
                       $reading_time = ceil($word_count / 200);
                      echo esc_html($reading_time . ' min');
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
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>