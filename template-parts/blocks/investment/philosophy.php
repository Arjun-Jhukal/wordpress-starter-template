<?php
$section_title=get_field('investment_philosophy_title');
$brief=get_field('investment_philosophy_brief');
$philosophy_list=get_field('investment_philosophy_list');
?>

<section class="tpfl-philosophy bg-primary section-padding-y section-gap">
  <div class="container">
    <div class="section-title text-center">
      <?php if($section_title):?>
      <h2 class="text-center"><?php echo $section_title; ?></h2>
      <?php endif?>

      <?php if($brief):?>
      <p><?php echo $brief; ?></p>
      <?php endif?>
    </div>

    <?php if(!empty($philosophy_list)):?>
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="row">
          <?php foreach($philosophy_list as $index => $philosophy ): ?>
          <div class="col-lg-6">
            <div class="philosophy-single d-sm-flex text-center text-sm-start">

              <?php
        $item_icon=$philosophy['single_investment_philosophy_icon'];
        $item_title=$philosophy['single_investment_philosophy_title'];
        $item_detail=$philosophy['single_investment_philosophy_detail'];
        ?>
              <?php if($item_icon): ?>
              <div class="ps-icon mx-auto mx-0">
                <img src="<?php echo esc_url($item_icon["url"]); ?>"
                  alt="<?php echo isset($item_icon['alt']) && $item_icon['alt'] ? $item_icon['alt'] : $item_title; ?>"
                  class="img-fluid">
              </div>
              <?php endif; ?>
              <div class="ps-content">
                <?php if($item_title): ?>
                <h4><?php echo esc_html($item_title); ?></h4>
                <?php endif; ?>
                <?php if($item_detail): ?>
                <p><?php echo esc_html($item_detail);?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
</section>