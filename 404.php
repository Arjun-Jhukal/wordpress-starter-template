<?php

get_header();
?>

<section class="not-found section-padding-y">
  <div class="container">
    <div class="nf-content">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/404.png" alt="" class="img-fluid">
      <h1>PAGE NOT FOUND
      </h1>
      <p>Uh-oh! It looks like the page you're searching for isn't here. Please check the URL or return to the
        homepage.</p>
      <a href="<?php echo get_home_url();?>" class="tpfl-btn tpfl-btn-filled">Go to Homepage -></a>
    </div>
  </div>
  <div class="top-left">
    <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/t-shape.png" alt="" class="img-fluid">
  </div>
  <div class="bottom-right">
    <img src="<?php echo get_parent_theme_file_uri();?>/assets/images/c-shape.png" alt="" class="img-fluid">
  </div>
</section>
<?php
get_footer();
?>