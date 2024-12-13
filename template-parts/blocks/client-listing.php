<?php
$title=get_field('client_listing_section_title');
$brief=get_field('client_listing_section_brief');
$tpfl_clients = get_field('tpfl_clients', 'option');
?>

<section class="client-listing section-gap">
  <div class="container">
    <div class="section-title text-center">
      <?php if($title):?>
      <h3><?php echo esc_html($title);?></h3>
      <?php endif;?>
      <?php if($brief):?>
      <p><?php echo esc_html($brief);?></p>
      <?php endif;?>
    </div>

    <div class="client-slider-wrapper">
      <div class="client-slider">
        <?php if ($tpfl_clients): ?>
        <?php foreach ($tpfl_clients as $client): ?>
        <?php 
                $client_logo = $client['client_logo'];
                $client_website = $client['client_website'];
            ?>
        <div class="client-item">
          <a href="<?php echo esc_url($client_website); ?>" class="client" target="_blank">
            <img src="<?php echo esc_url($client_logo['url']); ?>" alt="<?php echo esc_attr($client_logo['alt']); ?>"
              class="img-fluid">
          </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="client-slider-dots">

      </div>
    </div>
  </div>
</section>