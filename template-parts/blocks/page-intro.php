<?php
// $title=get_field("page_title")||the_title();
$title=get_field("page_title");
$image=get_field("page_intro_image");
$description=get_field("page_intro_description");
?>

<section class="page-intro section-gap">
  <div class="container">
    <div class="pi-content">
      <?php if($title):?>
      <h1><?php echo $title?></h1>
      <?php endif;?>

      <?php if($description):
        echo $description;
      endif;?>

      <?php if($image): ?>
      <div class="featured-image">
        <img src="<?php echo $image['url']?>" alt="<?php $image['alt'] || $title?>" class="img-fluid">
      </div>
      <?php endif;?>
    </div>
  </div>
</section>