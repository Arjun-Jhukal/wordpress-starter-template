<?php
$layout=get_field('process_layout');
$section_title=get_field('process_title');
$brief=get_field('process_brief');
$all_process=get_field('process_list_items');

?>
<section class="values section-gap <?php echo (!($layout) ?"bg-shape":"")?>">
  <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/t-shape.png" alt="" class='img-fluid d-none'>
  <div class="container">
    <?php if(!$layout):?>
    <div class="values-wrapper">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <?php if($section_title):?>
            <h2><?php echo $section_title; ?></h2>
            <?php endif;?>
            <?php if($brief):?>
            <p><?php echo esc_html($brief);?></p>
            <?php endif;?>
          </div>
        </div>
        <?php if(!empty($all_process)):?>
        <div class="col-lg-6">
          <div class="process-vertical">
            <?php foreach($all_process as $index => $process):?>
            <div class="pv-single d-flex justify-content-start align-items-center">
              <?php 
            $title=$process['single_process_title'];
            $detail=$process['single_process_detail'];
            ?>
              <div class="pv-index">
                <h3><?php echo ($index + 1);?></h3>
              </div>
              <div class="pv-content">
                <?php if($title):?>
                <h5><?php echo esc_html($title);?></h5>
                <?php endif;?>
                <?php if($brief):?>
                <p><?php echo esc_html($detail);?>
                </p>
                <?php endif;?>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <?php endif;?>
      </div>
    </div>
    <?php else:?>
    <div class="process-wrapper">
      <div class="section-title text-start text-lg-center mx-auto">
        <?php if($section_title):?>
        <h2><?php echo $section_title; ?></h2>
        <?php endif;?>
        <?php if($brief):?>
        <p><?php echo esc_html($brief);?></p>
        <?php endif;?>
      </div>
      <div class="process-wrapper">
        <div class="process-horizontal d-lg-flex">
          <?php foreach($all_process as $index => $process):?>
          <div class="ph-single d-flex justify-content-start align-items-center flex-lg-column">
            <?php 
            $title=$process['single_process_title'];
            $detail=$process['single_process_detail'];
            ?>
            <div class="ph-index d-lg-none">
              <h2><?php echo ($index + 1);?></h2>
            </div>
            <div class="ph-content">
              <div class="title">
                <h2 class="d-none d-lg-block"><?php echo ($index + 1);?></h2>
                <?php if($title):?>
                <h5><?php echo esc_html($title);?></h5>
                <?php endif;?>
              </div>
              <?php if($brief):?>
              <p><?php echo esc_html($detail);?>
              </p>
              <?php endif;?>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
</section>