<?php
$section_title=get_field('tpfl_vision_element_title');
$brief=get_field('tpfl_vision_element_brief');
$tpfl_vision_elements=get_field('tpfl_vision_elements');
?>

<section class="vision-element section-gap">
  <div class="container">
    <div class="section-title text-center mx-auto">
      <?php if($section_title):?>
      <h2><?php echo $section_title; ?></h2>
      <?php endif;?>

      <?php if($brief):?>
      <p><?php echo esc_html($brief);?></p>
      <?php endif;?>
    </div>
    <?php if(!empty($tpfl_vision_elements)):?>
    <div class="row">
      <?php foreach($tpfl_vision_elements as $index => $vision):?>
      <div class="col-md-6 col-lg-3">
        <div class="ve-item">
          <?php
          $vision_icon=$vision['vision_element_icon'];
          $vision_title=$vision['vision_element_title'];
          $vision_brief=$vision['vision_element_description'];
          ?>

          <?php if($vision_icon['url']):?>
          <div class="ve-icon">
            <img src="<?php echo esc_url($vision_icon['url']);?>"
              alt="<?php echo isset($vision_icon['alt'])?esc_attr($vision_icon['alt']):esc_attr($vision_title);?>"
              class="img-fluid">
          </div>
          <?php endif;?>

          <div class="ve-content">
            <?php if($vision_title):?>
            <h5><?php echo esc_html($vision_title);?></h5>
            <?php endif;?>

            <?php if($vision_brief):?>
            <p><?php echo esc_html($vision_brief);?></p>
            <?php endif;?>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <?php endif;?>
  </div>
</section>