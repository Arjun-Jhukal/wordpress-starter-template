<?php
$tabs=get_field('tab_content');
?>

<?php if(!empty($tabs)):?>
<section class="investment-tab section-padding-y section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-5 d-none d-lg-block">
        <div class="it-images">
          <?php foreach ($tabs as $index => $tab): 
            $item_image=$tab['tab_image'];
            $item_title=$tab['tab_title'];
            ?>
          <div class="it-image <?php echo $index === 0 ? 'active' : ''; ?>"
            data-index="<?php echo sanitize_title_with_dashes($tab['tab_title']) . '-' . $index;?>">
            <img src="<?php echo esc_url($item_image['url']); ?>"
              alt="<?php echo esc_attr(isset($item_image['alt'])&&$item_image['alt']?$item_image['alt']:$item_title); ?>"
              class="img-fluid">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="tab-wrapper">
          <div class="tab-controller">
            <ul class="d-none d-sm-flex justify-content-start align-items-center ">
              <?php foreach($tabs as $index => $tab):?>
              <li class="<?php echo $index === 0? "active":''; ?>">
                <a href="#" data-target="<?php echo sanitize_title_with_dashes($tab['tab_title']) . '-' . $index;?>">
                  <?php echo esc_html($tab['tab_title']);?>
                </a>
              </li>
              <?php endforeach;?>
            </ul>

            <div class="mobile-tab-controller d-sm-none">
              <div class="select-field">
                <select>
                  <?php foreach ($tabs as $index=>$tab):?>
                  <option value="<?php echo sanitize_title_with_dashes($tab['tab_title']) . "-" . $index;?>">
                    <?php echo esc_html($tab['tab_title'])?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>
          <div class="tab-content-wrapper">
            <?php foreach ($tabs as $index => $tab): 
            $item_detail=$tab['tab_detail'];
            $item_image=$tab['tab_image'];
            ?>
            <div class="tab-content <?php echo $index === 0? "active":''; ?>"
              id="<?php echo sanitize_title_with_dashes($tab['tab_title']) . '-' . $index;?>">
              <?php if($item_image): ?>
              <div class="it-images d-lg-none">
                <div class="it-image">
                  <img src="<?php echo esc_url($item_image['url']); ?>"
                    alt="<?php echo esc_attr(isset($item_image['alt'])&&$item_image['alt']?$item_image['alt']:$item_title); ?>"
                    class="img-fluid">
                </div>
              </div>
              <?php endif;?>
              <?php echo $item_detail; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>