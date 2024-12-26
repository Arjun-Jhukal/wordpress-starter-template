<?php
$section_title = get_field('contact_us_title') ? get_field('contact_us_title') : get_the_title();
$brief = get_field('contact_us_brief');
$contact_items= get_field('contact_details');
$iframe=get_field('contact','option');
?>

<section class="contact-us section-gap">
  <div class="container">
    <div class="section-title">
      <?php if($section_title):?>
      <h1><?php echo $section_title; ?></h1>
      <?php endif;?>
      <?php if($brief):?>
      <?php echo $brief; ?>
      <?php endif;?>
    </div>

    <div class="row">
      <div class="col-lg-5 col-xl-4">
        <?php if(!empty($contact_items)): ?>
        <div class="contact-information">
          <?php foreach($contact_items as $index => $contact): ?>

          <div class="ci-item d-flex justify-content-start">
            <?php
              $item_icon = $contact['contact_icon'];
              $item_label = $contact['contact_label'];
              $item_note = $contact['contact_note'];
              $item_info = $contact['contact_info'];
              $item_is_location = $contact['is_location__address'];
              $is_email = filter_var($item_info, FILTER_VALIDATE_EMAIL);
              $is_phone = preg_match('/^\+?[0-9\s\-()]*$/', $item_info); 
            ?>

            <?php if ($item_icon): ?>
            <div class="cii-icon">
              <img src="<?php echo esc_url($item_icon['url']); ?>"
                alt="<?php echo esc_attr($item_icon['alt'] ?? $item_label ?? ''); ?>">
            </div>
            <?php endif; ?>

            <div class="cii-content">
              <?php if ($item_label): ?>
              <h4><?php echo esc_html($item_label); ?></h4>
              <?php endif; ?>

              <?php if ($item_note): ?>
              <span><?php echo esc_html($item_note); ?></span>
              <?php endif; ?>

              <?php if ($item_info): ?>
              <?php if (!$item_is_location): ?>
              <?php if ($is_email): ?>
              <a href="mailto:<?php echo esc_attr($item_info); ?>">
                <?php echo esc_html($item_info); ?>
              </a>
              <?php elseif ($is_phone): ?>
              <a href="tel:<?php echo esc_attr($item_info); ?>">
                <?php echo esc_html($item_info); ?>
              </a>
              <?php else: ?>
              <a href="#"><?php echo esc_html($item_info); ?></a>
              <?php endif; ?>
              <?php else: ?>
              <p><?php echo esc_html($item_info); ?></p>
              <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>

          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php if($iframe['location_iframe']):?>
      <div class="col-lg-7 col-xl-8">
        <div class="location-wrapper">
          <?php echo $iframe['location_iframe'];  ?>
        </div>
      </div>
      <?php endif;?>
    </div>
  </div>
</section>