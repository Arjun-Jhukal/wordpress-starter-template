<?php
get_header();
?>

<section class="career-detail-featured section-gap">
  <div class="container">
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php the_excerpt();?></p>
    </div>

    <div class="df-content-box">
      <?php if (has_post_thumbnail()): ?>
      <div class="key-highlight-wrapper">
        <ul class="key-highlights">
          <li>
            <div class="icon">
              <img src="" alt="">
            </div>
            <div class="content">
              <strong></strong>
              <span>Salary</span>
            </div>
          </li>
        </ul>
        <a href="#" class="tpfl-btn tpfl-btn-filled">Apply Now -></a>
      </div>
      <div class="featured-image">
        <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
      </div>
      <?php endif;?>
    </div>
  </div>
</section>
<section class="career-detail-content section-gap">
  <div class="container">
    <div class="dc-content-box">
      <?php the_content();?>
    </div>
    <div class="contact-form-wrapper">
      <?php echo do_shortcode('[contact-form-7 id="9c3f845" title="Application Form"]'); ?>

    </div>
  </div>
</section>

<?php
get_footer();
?>