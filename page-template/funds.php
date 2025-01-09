<?php
/**
 * Template Name: Funds Template
 */

get_header();

$section_title= get_field('team_fund_title') ?? get_the_title();
$status=get_field('team_fund_status');
$gallery=get_field('team_fund_gallery');
?>

<section class="funds detail-content-wrapper section-gap">
  <div class="container">
    <div class="section-title d-flex align-items-center justify-content-between">
      <h1><?php echo $section_title; ?></h1>
      <p>
        <strong class="d-none d-sm-inline-block">Fund Status: </strong>
        <span class="text-uppercase <?php echo $status?"open":"closed"?>"><?php echo $status? "Open":"Closed"?></span>
      </p>
    </div>
    <div class="funds-content">
      <div class="row">
        <div class="<?php echo empty($gallery) ? 'col-12' : 'col-lg-6 col-xl-7'; ?>">
          <div class="content-box">
            <?php the_content(); ?>
          </div>
        </div>

        <?php if(!empty($gallery)):?>
        <div class="col-lg-6 col-xl-5">
          <div class="image-wrapper d-md-flex d-lg-block">

            <?php foreach($gallery as $index => $image): ?>
            <div class="image <?php echo $index===0 ? "featured":""; ?>">
              <?php
                      $src=$image['url'];
                      $alt=isset($image['alt'])?$image['alt']:'';
                      if($src):
                      ?>
              <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt);?>" class="img-fluid ">
              <?php endif;?>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>