<?php
$show_career_list=get_field('show_career_listing');
$section_title=get_field('career_listing_title');
$brief=get_field('career_listing_brief');
if($show_career_list):
?>

<section class="career-listing section-gap">
  <div class="container">
    <div class="section-title">
      <?php if($section_title):?>
      <h2><?php echo esc_html($section_title);?></h2>
      <?php endif;?>
      <?php if($brief):?>
      <p><?php echo esc_html($brief)?></p>
      <?php endif;?>
    </div>
    <div class="careers">
      <?php
      $current_date = date('Y-m-d'); 
      $careers = new WP_Query(array(
        'post_type' => 'career',
        'post_status' => 'publish',
        'meta_query' => array(
          array(
            'key' => 'career_validate_date',
            'value' => $current_date,
            'compare' => '>=', // Fetch posts with validate_date >= current date
            'type' => 'DATE', // Ensure the meta value is treated as a DATE
          ),
        ),
      ));

      
      if($careers -> have_posts()):
        while($careers -> have_posts()):$careers->the_post();

        $id=get_the_ID();
        $title=get_the_title();
        $salary=get_field('career_salary',$id);
        $salary_amount=get_field('career_salary_amount',$id);
        $location=get_field('career_location',$id);
        $career_validity=get_field('career_validate_date',$id);
        $taxonomy_terms = get_the_terms($id, 'job-type');
        $formatted_date = $career_validity ? date('M d', strtotime($career_validity)) : null;
         $permalink = get_permalink($id);
      ?>
      <div class="career d-flex align-items-start">
        <div class="career-icon">
          <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/career-icon.svg" alt="" class="img-fluid">
        </div>
        <div class="career-content">
          <?php if($title):?>
          <a href="<?php echo esc_url($permalink)?>">
            <h4><?php echo esc_html($title);?></h4>
          </a>
          <?php endif;?>
          <ul class="d-sm-flex">

            <?php if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) : ?>
            <li><?php echo esc_html($taxonomy_terms[0]->name); ?></li>
            <?php endif; ?>

            <?php if($location):?>
            <li><?php echo esc_html($location);?></li>
            <?php endif;?>

            <?php 
              if ($formatted_date) : 
                  // Calculate the current date and target date
                  $current_date = new DateTime();
                  $target_date = new DateTime($formatted_date);
                  $interval = $current_date->diff($target_date);
                  
                  // Check if the target date is exactly 3 days from now
                  $is_three_days = ($interval->days <= 3 && $interval->invert === 0);
              ?>
            <li>
              Deadline:
              <span class="<?php echo $is_three_days ? 'error' : ''; ?>">
                <?php echo esc_html($formatted_date); ?>
              </span>
            </li>
            <?php endif; ?>

          </ul>
          <a href="<?php echo esc_url($permalink)?>" class="tpfl-btn-text tpfl-btn-underlined view-btn">View Detail
            -></a>
        </div>
      </div>
      <?php endwhile; ?>
      <?php else:?>
      <div class="empty-block text-center section-padding-y bg-light">
        <h3>We are not Hiring right now !</h3>
        <p>
          Subscribe to our news-letter to get update about future vacancy.
        </p>

        <div class="news-letter">
          <?php echo do_shortcode('[contact-form-7 id="4bfdb33" title="News Letter"]');?>
        </div>
      </div>
      <?php endif;?>
    </div>
  </div>
</section>



<?php endif;?>