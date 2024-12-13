<?php
$title=get_field("cta_title");
$cta_list=get_field("ctas");
?>

<section class="cta-block section-gap">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6">
        <?php if($title) :?>
        <div class="section-title text-center text-lg-start">
          <h3><?php echo $title; ?></h3>
        </div>
        <?php endif;?>
      </div>
      <div class="col-lg-6">
        <?php if ($cta_list) : ?>
        <div class="cta-list d-flex justify-content-center justify-content-lg-end flex-wrap">
          <?php foreach ($cta_list  as $index => $cta_item) : ?>
          <?php 
                $cta = $cta_item['cta_button'];
            ?>
          <a href="<?php echo esc_url($cta['url']); ?>"
            target="<?php echo !empty($cta['target']) ? esc_attr($cta['target']) : '_self'; ?>"
            class="tpfl-btn  <?php echo !$index > 0 ?'tpfl-btn-filled':'tpfl-btn-outlined';?>">
            <?php echo esc_html($cta['title']); ?> ->
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>