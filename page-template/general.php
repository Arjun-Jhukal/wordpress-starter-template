<?php
/**
 * Template Name: General Page
 */
get_header();
?>

<section class="general-section section-gap">
  <div class="container">
    <div class="gs-content">
      <div class="section-title">
        <h1><?php the_title();?></h1>
      </div>
      <?php
      the_content();
      ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>