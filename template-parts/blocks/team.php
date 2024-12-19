<?php
$showTeam=get_field('enable_team');

  if ($showTeam):
    $team_categories = get_terms(array(
        'taxonomy'   => 'team-category',
        'hide_empty' => false, 
    ));
  endif;
?>

<?php if($showTeam):?>
<section class="team-members section-gap">
  <div class="container">
    <div class="tab-wrapper">
      <div class="tab-controller">
        <ul class="d-sm-flex justify-content-start align-items-center d-none">
          <?php foreach ($team_categories as $index => $category): ?>
          <li class="<?php echo $index === 0 ? 'active' : ''; ?>">
            <a href="#" data-target="team-<?php echo esc_attr($category->slug); ?>">
              <?php echo esc_html($category->name); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="mobile-tab-controller d-sm-none">
          <div class="select-field">
            <select>
              <?php foreach ($team_categories as $category): ?>
              <option value="team-<?php echo esc_attr($category->slug); ?>">
                <?php echo esc_html($category->name); ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="tab-content-wrapper">
        <?php foreach ($team_categories as $index => $category): ?>
        <div class="tab-content <?php echo $index === 0 ? 'active' : ''; ?>"
          id="team-<?php echo esc_attr($category->slug); ?>">
          <?php
            $team_members= new WP_Query(array(
              'post_type'=>'our-team',
              'tax_query'=>array(
                array(
                  'taxonomy'=>'team-category',
                  'field'=>'slug',
                  'terms'=>$category->slug
                )
              )
                ));           
            ?>


          <?php if($team_members -> have_posts()):
              while($team_members->have_posts()):$team_members->the_post();
              $id = get_the_ID();
              $name=get_the_title();
              $detail=get_the_content();
              $designation=get_field('team_member_designation', $id);
              $socials=get_field('team_member_socials', $id);
              ?>
          <div class="team-member d-lg-flex">
            <div class="tm-profile d-none d-lg-block">
              <?php if (has_post_thumbnail()): ?>
              <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php echo $name; ?>" class="img-fluid">
              <?php else: ?>
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-02.png" alt="Placeholder"
                class="img-fluid">
              <?php endif; ?>
            </div>
            <div class="tm-content">
              <div class="tmc-header">
                <div class="tm-info d-flex align-items-center d-lg-block">
                  <div class="tm-profile d-lg-none">
                    <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php echo $name; ?>"
                      class="img-fluid">
                    <?php else: ?>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-02.png"
                      alt="Placeholder" class="img-fluid">
                    <?php endif; ?>
                  </div>
                  <div class="info d-lg-flex justify-content-between">
                    <div class="name-wrapper">
                      <?php if($name):?>
                      <h4><?php echo esc_html($name);?></h4>
                      <?php endif;?>
                      <?php if($designation):?>
                      <span><?php echo esc_html($designation);?></span>
                      <?php endif;?>

                    </div>
                    <?php if($socials): 
                         $facebook=$socials['facebook']; 
                         $linkedin=$socials['linkedin']; 
                         $twitter=$socials['twitter']; 
                          ?>
                    <div class="socials">
                      <ul class="d-flex">
                        <?php if($facebook):?>
                        <li>
                          <a href="<?php esc_url($facebook);?>">
                            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/facebook.svg" alt="">
                          </a>
                        </li>
                        <?php endif;?>
                        <?php if($linkedin):?>
                        <li>
                          <a href="<?php esc_url($linkedin);?>">
                            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/linkedin.svg" alt="">
                          </a>
                        </li>
                        <?php endif;?>
                        <?php if($twitter):?>
                        <li>
                          <a href="<?php esc_url($twitter);?>">
                            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/x.svg" alt="">
                          </a>
                        </li>
                        <?php endif;?>
                      </ul>
                    </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="content-box">
                <?php if($detail):
                  echo $detail;
                endif;?>
              </div>
            </div>
          </div>

          <?php endwhile; endif; ?>

        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</section>
<?php endif;?>