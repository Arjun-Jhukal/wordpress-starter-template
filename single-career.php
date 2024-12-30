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
      <div class="key-highlight-wrapper d-lg-flex justify-content-between align-items-center">

        <?php
        $id=get_the_ID();
        $salary_info=get_field('career_salary',$id);
        $location=get_field('career_location',$id);
         $career_validity=get_field('career_validate_date',$id);
        $taxonomy_terms = get_the_terms($id, 'job-type');
        $formatted_date_deadline = $career_validity ? date('M d', strtotime($career_validity)) : null;
        $added=get_the_date();
      ?>
        <ul class="key-highlights d-flex justify-content-start align-items-center flex-wrap">
          <?php if($salary_info):?>
          <li class="d-flex justify-content-start">
            <div class="icon">
              <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/kh-05.svg" alt="">
            </div>
            <div class="content">
              <strong><?php echo esc_html($salary_info);?></strong>
              <span>Salary</span>
            </div>
          </li>
          <?php endif;?>
          <?php if($taxonomy_terms && !is_wp_error($taxonomy_terms)):?>
          <li class="d-flex justify-content-start">
            <div class="icon">
              <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/kh-04.svg" alt="">
            </div>
            <div class="content">
              <strong><?php echo esc_html($taxonomy_terms[0]->name);?></strong>
              <span>Job Type</span>
            </div>
          </li>
          <?php endif;?>
          <?php if($location):?>
          <li class="d-flex justify-content-start">
            <div class="icon">
              <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/kh-03.svg" alt="">
            </div>
            <div class="content">
              <strong><?php echo esc_html($location);?></strong>
              <span>Location</span>
            </div>
          </li>
          <?php endif;?>
          <?php if($added):?>
          <li class="d-flex justify-content-start">
            <div class="icon">
              <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/kh-02.svg" alt="">
            </div>
            <div class="content">
              <?php
              $formatted_added_date=$added?date('M d',strtotime($added)):null
              
              ?>
              <strong><?php echo esc_html($formatted_added_date);?></strong>
              <span>Added</span>
            </div>
          </li>
          <?php endif;?>
          <?php if($formatted_date_deadline):?>
          <li class="d-flex justify-content-start">
            <div class="icon">
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/kh-01.svg" alt="">
            </div>
            <div class="content">
              <?php if($formatted_date_deadline):
                $current_date = new DateTime();
                  $target_date = new DateTime($formatted_date_deadline);
                  $interval = $current_date->diff($target_date);

                   $is_three_days = ($interval->days <= 3 && $interval->invert === 0);
                ?>
              <strong
                class="<?php echo $is_three_days ? 'error' : ''; ?>"><?php echo esc_html($formatted_date_deadline); ?></strong>
              <span>Deadline</span>
              <?php endif;?>
            </div>
          </li>
          <?php endif;?>
        </ul>
        <a href="#" class="tpfl-btn tpfl-btn-filled d-block text-center d-lg-inline-block">Apply Now -></a>
      </div>
      <?php if (has_post_thumbnail()): ?>
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