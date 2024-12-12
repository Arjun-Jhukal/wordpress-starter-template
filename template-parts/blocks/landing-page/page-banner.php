<?php
$title=get_field("pb_title");
$overTitle=get_field("pb_over_title");
$brief=get_field("pb_brief");
$cta=get_field("page_banner_cta");
$image=get_field("pb_background_image");
?>
<section class="page-banner section-padding-y" <?php if ($image && $image["url"]) : ?>
  style="background: url('<?php echo esc_url($image["url"]); ?>') no-repeat center/cover ,  #235d41;" <?php endif; ?>>
  <div class="container">
    <div class="pb-content">
      <?php if($overTitle) : ?>
      <span class="over-title"><?php echo esc_html($overTitle); ?></span>
      <?php endif; ?>

      <?php if($title) : ?>
      <h1><?php echo $title; ?></h1>
      <?php endif; ?>

      <?php if($brief) : ?>
      <p><?php echo $brief; ?></p>
      <?php endif; ?>

      <?php if ($cta && $cta["url"]) : ?>
      <a href="<?php echo esc_url($cta["url"]); ?>" class="tpfl-btn tpfl-btn-filled"
        target="<?php echo !empty($cta["target"]) ? esc_attr($cta["target"]) : '_self'; ?>">
        <?php echo esc_html($cta["title"]); ?>
      </a>
      <?php endif; ?>

    </div>
  </div>
</section>