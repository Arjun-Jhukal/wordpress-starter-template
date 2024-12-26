<?php
$section_title=get_field("approach_title");
$brief=get_field("approach_detail");
$approach_items=get_field("approach_list");
?>

<section class="our-approach section-gap">
  <div class="container">
    <div class="section-title">
      <?php if($section_title):?>
      <h2><?php echo $section_title?></h2>
      <?php endif;?>
      <?php if($brief):?>
      <p><?php echo esc_html($brief)?></p>
      <?php endif;?>
    </div>

    <?php if(!empty($approach_items)):?>
    <div class="row">
      <?php forEach($approach_items as $index => $approach):?>
      <div class="col-lg-4">
        <div class="approach-single">

          <?php
        $item_icon=$approach["single_approach_icon"];
        $item_title=$approach['single_approach_title'];
        $item_detail=$approach['single_approach_detail'];
        ?>
          <?php if($item_icon):?>
          <div class="approach-icon">
            <img src="<?php echo esc_url($item_icon['url']);?>" alt="<?php echo $item_title;?>" class="img-fluid">
          </div>
          <?php endif;?>
          <div class="approach-content">
            <?php if($item_title):?>
            <h4><?php echo esc_html($item_title);?></h4>
            <?php endif;?>
            <?php if($item_detail):?>
            <p><?php echo esc_html($item_detail);?></p>
            <?php endif;?>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <?php endif;?>
  </div>
</section>