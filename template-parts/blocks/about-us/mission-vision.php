<?php
$mission_title=get_field('tpfl_mission_title');
$mission_title_icon=get_field('tpfl_mission_title_icon');
$mission_listing=get_field('tpfl_mission_listing');
$vision_title=get_field('tpfl_vision_title');
$vision_image=get_field('tpfl_vision_image');
$vision_content=get_field('tpfl_vision');
?>

<section class="mission-vision section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-7">
        <div class="mv-block mission-block">
          <?php if($mission_title):?>
          <div class="block-title">
            <h2>
              <?php if($mission_title_icon):?>
              <img src="<?php echo esc_url($mission_title_icon['url']);?>"
                alt="<?php echo isset($mission_title_icon['alt']) ? esc_attr($mission_title_icon['alt']) : esc_htm($mission_title); ?>">
              <?php endif;?>
              <?php echo $mission_title;?>
            </h2>
          </div>
          <?php endif;?>

          <?php if($mission_listing):?>
          <div class="block-content">
            <?php echo $mission_listing;?>
          </div>
          <?php endif;?>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5">
        <div class="mv-block vision-block">

          <?php if($vision_image):?>
          <img src="<?php echo esc_url($vision_image['url']);?>"
            alt="<?php echo isset($vision_image['alt']) ? esc_attr($vision_image['alt']) : esc_htm($vision_title); ?>">
          <?php endif;?>

          <?php if($vision_title):?>
          <div class="block-title">
            <h2>
              <?php echo $vision_title;?>
            </h2>
          </div>
          <?php endif;?>

          <?php if($vision_content):?>
          <div class="block-content">
            <?php echo $vision_content;?>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</section>