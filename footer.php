</main>
<?php
$footer_logo= get_field('footer_logo','option');
$about_tpfl= get_field('about_tpfl','option');
$copyright= get_field('copyright','option');
$footer_bg= get_field('footer_bg','option');
$contact= get_field('contact','option');
$socials= get_field('socials','option');
$footer_tag_line= get_field('footer_tag_line','option');
?>
<footer class="footer " style="background:url(<?php echo $footer_bg['url']?>) no-repeat center/cover, #235D41">
  <div class="container">
    <div class="row">
      <div class="col-xl-3">
        <div class="footer-about text-center text-xl-start">
          <div class="fa-content">
            <?php if($footer_logo):?>
            <a href="<?php echo home_url()?>" class="footer-logo">
              <img src="<?php echo esc_url($footer_logo["url"]);?>" alt="<?php echo esc_attr( $footer_logo["alt"]);?>"
                class="img-fluid">
            </a>
            <?php endif;?>

            <?php if($about_tpfl):?>
            <small><?php echo esc_html($about_tpfl)?></small>
            <?php endif;?>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-xl-2">
        <div class="footer-links">
          <strong>
            <?php
                $menu_name = 'quick-links';
                $menu = wp_get_nav_menu_object($menu_name);
                echo $menu ? esc_html($menu->name) : 'Quick Links';
                ?>
          </strong>
          <?php
            wp_nav_menu([
              'theme_location'=>'quick-links',
              'container'=>false,
              'menu_class'=>''
            ])
            ?>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-xl-2">
        <div class="footer-links">
          <strong><?php
                $menu_name = 'company';
                $menu = wp_get_nav_menu_object($menu_name);
                echo $menu ? esc_html($menu->name) : 'Company';
                ?></strong>
          <?php
              wp_nav_menu([
              'theme_location'=>'company',
              'container'=>false,
              'menu_class'=>''
            ])
            ?>
        </div>
      </div>
      <?php if($socials):?>
      <div class="col-6 col-lg-3 col-xl-2">
        <div class="footer-links">
          <strong>Socials</strong>
          <ul>
            <?php foreach($socials as $social_item):?>
            <?php
                $social_icon=$social_item['social_image'];
                $social_cta=$social_item['social_cta'];
                ?>
            <li>
              <a href="<?php echo esc_url($social_cta['url']);?>"
                target="<?php echo !empty($social_cta['target']) ? $social_cta['target']:'_blank';?>">
                <img src="<?php echo esc_url($social_icon['url']);?>" alt="<?php echo esc_attr($social_icon['alt']);?>">
                <?php echo $social_cta['title'] ? $social_cta['title']:'';?>
              </a>
            </li>
            <?php endforeach ;?>
          </ul>
        </div>
      </div>
      <?php endif ;?>

      <?php if ($contact): ?>
      <div class="col-6 col-lg-3 col-xl-2">
        <div class="footer-links contact">
          <strong>Contact</strong>
          <ul>
            <?php if (!empty($contact['address'])): ?>
            <li>
              <div class="label">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/location-dot.svg" alt=""
                  class="img-fluid">
                <span>Address</span>
              </div>
              <p><?php echo esc_html($contact['address']); ?></p>
            </li>
            <?php endif; ?>

            <?php if (!empty($contact['phone_number_1'])): ?>
            <li>
              <div class="label">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/phone.svg" alt="" class="img-fluid">
                <span>Phone</span>
              </div>
              <a href="tel:<?php echo esc_attr($contact['phone_number_1']); ?>">
                <?php echo esc_html($contact['phone_number_1']); ?>
              </a>
            </li>
            <?php endif; ?>

            <?php if (!empty($contact['phone_number_2'])): ?>
            <li>
              <div class="label">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/phone.svg" alt="" class="img-fluid">
                <span>Phone</span>
              </div>
              <a href="tel:<?php echo esc_attr($contact['phone_number_2']); ?>">
                <?php echo esc_html($contact['phone_number_2']); ?>
              </a>
            </li>
            <?php endif; ?>

            <?php if (!empty($contact['email'])): ?>
            <li>
              <div class="label">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/email.svg" alt="" class="img-fluid">
                <span>Email</span>
              </div>
              <a href="mailto:<?php echo esc_attr($contact['email']); ?>">
                <?php echo esc_html($contact['email']); ?>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>


    </div>

    <div class="copyright-and-watermark">
      <?php
    echo  $footer_tag_line ? '<marquee>'.$footer_tag_line.'</marquee>':''
      ?>
      <p class="text-center text-sm-end">
        <?php 
         $current_year = date('Y');
        echo $copyright? 'Copyright © '. $current_year . ' ' . $copyright:'Copyright ©' . $current_year . 'Team Partners Fund Limited. All rights reserved.';?>
      </p>
    </div>
  </div>
</footer>

<div class="tpfl-toast">
  <div class="toast-content d-flex justify-content-between  align-items-start">
    <p>Something went wrong because of cache !</p>
    <button type="button" class="btn-close-toast">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path
          d="M9.46584 8.00012L15.6959 1.76972C16.1014 1.36446 16.1014 0.709208 15.6959 0.303946C15.2907 -0.101315 14.6354 -0.101315 14.2302 0.303946L7.99991 6.53434L1.76983 0.303946C1.36438 -0.101315 0.709335 -0.101315 0.304082 0.303946C-0.101361 0.709208 -0.101361 1.36446 0.304082 1.76972L6.53416 8.00012L0.304082 14.2305C-0.101361 14.6358 -0.101361 15.291 0.304082 15.6963C0.506044 15.8984 0.771594 16 1.03695 16C1.30231 16 1.56767 15.8984 1.76983 15.6963L7.99991 9.46589L14.2302 15.6963C14.4323 15.8984 14.6977 16 14.963 16C15.2284 16 15.4938 15.8984 15.6959 15.6963C16.1014 15.291 16.1014 14.6358 15.6959 14.2305L9.46584 8.00012Z"
          fill="black" />
      </svg>
    </button>
  </div>
</div>
</body>
<?php
wp_footer();
?>

</html>