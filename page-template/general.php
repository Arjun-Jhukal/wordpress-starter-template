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
        <span>Last Modified: <?php echo get_the_date();?></span>
      </div>

      <div class="row">
        <div class="col-lg-8 col-xl-9">
          <?php
          the_content();
          ?>
        </div>
        <div class="col-lg-4 col-xl-3">
          <aside class="blog-aside">
            <div class="mobile-toc-controller d-lg-none">
              <strong>
                <?php
                $menu_name = 'quick-links';
                $menu = wp_get_nav_menu_object($menu_name);
                echo $menu ? esc_html($menu->name) : 'Menu';
                ?>
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/angle-down.svg" alt="">
              </strong>
            </div>
            <div class="blocks-wrapper">
              <div class="ba-block">
                <h3>
                  <?php
                $menu_name = 'quick-links';
                $menu = wp_get_nav_menu_object($menu_name);
                echo $menu ? esc_html($menu->name) : 'Menu';
                ?>
                </h3>
                <?php
              wp_nav_menu([
                'theme-location'=>'quick-links',
                'container'=>false,
                'menu_class'=>''
              ])
              ?>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>