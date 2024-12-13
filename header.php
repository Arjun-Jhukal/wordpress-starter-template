<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WE WIN, WHEN WE ALL WIN | TPFL</title>
  <meta name="description"
    content="Welcome to Team Partners Fund Limited (TPFL), where innovation meets investment and potential transforms into success.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <?php
  wp_head();
  ?>
</head>

<body>

  <?php
$header_logo = get_field('header_logo', 'option');
$header_cta = get_field('header_cta', 'option');
?>
  <header class="header">
    <div class="container">
      <div class="header-content-box d-flex justify-content-between align-items-center">
        <a href="<?php echo home_url();?>" class="header-logo">
          <img src="<?php echo esc_url($header_logo['url'])?>" alt="<?php echo esc_attr($header_logo['alt'])?>"
            class="img-fluid">
        </a>
        <div class="primary-menu-wrapper">
          <?php
        wp_nav_menu([
          'theme-location'=>'primary-menu',
          'container'=>false,
          'menu_class'=>'primary-menu d-md-flex justify-content-md-center align-items-md-center'
        ]);
        ?>

        </div>
        <?php if($header_cta && $header_cta['url']):?>
        <div class="header-cta text-end">
          <a href="<?php echo esc_url($header_cta['url'])?>"
            target="<?php echo !empty($header_cta['target'])?$header_cta['target']:'_self'?>"
            class="tpfl-btn tpfl-btn-filled"><?php echo esc_html($header_cta['title'])?></a>
          <button type="button" class="ham d-md-none">=</button>
        </div>
        <?php endif;?>
      </div>
    </div>
  </header>

  <a href="#" class="overlay"></a>
  <main>