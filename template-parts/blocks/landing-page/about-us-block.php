<?php
$title=get_field("tldcr_title");
$description=get_field("tldcr_description");
$cta=get_field("tldcr_cta");
?>

<section class="about-block section-gap">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="section-title">
          <?php if($title) : ?>
          <h2><?php echo $title?></h2>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ab-content">
          <?php
         echo $description ? $description : "";
         ?>

          <?php if ($cta && $cta["url"]) :  ?>
          <a href="<?php echo esc_url($cta["url"]); ?>" class="tpfl-btn tpfl-btn-filled"
            target="<?php echo !empty($cta["target"]) ? esc_attr($cta["target"]) : '_self'; ?>">
            <?php echo esc_html($cta["title"]); ?>->
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>