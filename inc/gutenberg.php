<?php

if(function_exists('acf_register_block_type')){
  acf_register_block_type(array(
    'name' => 'landing-page-banner',
    'title'=> __('Landing Page Banner'),
    'description'=>__('A Block to display Landing Page Banner'),
    'render_template'=>'template-parts/blocks/landing-page/page-banner.php',
    'category' => 'widgets',
    'icon'=> 'images-alt2',
    'keywords'=>array('banner',"landing page")
  ));

  acf_register_block_type(array(
    'name'=>'about-us-block',
    'title'=>'About Us block',
    'description'=>__('A Block to display heading on the left and description with cta on the right'),
    'render_template'=>__('template-parts/blocks/landing-page/about-us-block.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("about us","block","about us block")
  ));
  
  acf_register_block_type(array(
    'name'=>'partner-listing',
    'title'=>'Partner Listing',
    'description'=>__('A Block to display partners on the page'),
    'render_template'=>__('template-parts/blocks/client-listing.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Clients","Client Listing")
  ));
  
  acf_register_block_type(array(
    'name'=>'cta-block',
    'title'=>'CTA Block',
    'description'=>__('A Block to engage user in taking action'),
    'render_template'=>__('template-parts/blocks/cta.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("CTA","Call To Action")
  ));
  
  acf_register_block_type(array(
    'name'=>'page-intro',
    'title'=>'Page Intro',
    'description'=>__('A First Block after breadcrumb with an image title and description'),
    'render_template'=>__('template-parts/blocks/page-intro.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Page Intro","Intro","Custom Page Intro")
  ));

  acf_register_block_type(array(
    'name'=>'mission-vision',
    'title'=>'TPFL Mission Vision',
    'description'=>__('A First Block to show company mission and vision'),
    'render_template'=>__('template-parts/blocks/mission-vision.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Mission","Vision","Mission & Vision")
  ));
  
  acf_register_block_type(array(
    'name'=>'vision-elements',
    'title'=>'TPFL Vision Elements',
    'description'=>__('A card layout with icon title and description'),
    'render_template'=>__('template-parts/blocks/vision-element.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Vision Elements","Vision")
  ));
  
  acf_register_block_type(array(
    'name'=>'title-description-on-left-list-on-right',
    'title'=>'Title Description on Left and List on Right',
    'description'=>__('A section that display title description on left and ordered list on the right.'),
    'render_template'=>__('template-parts/blocks/values.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Values","Steps","Title Description on Left and List on Right")
  ));

  acf_register_block_type(array(
    'name'=>'enable-team',
    'title'=>'Team Member',
    'description'=>__('A Block that determine whether or not to show team members on the page.'),
    'render_template'=>__('template-parts/blocks/team.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("Team","Our Team","Custom Team Block")
  ));
  
  acf_register_block_type(array(
    'name'=>'tpfl-approach',
    'title'=>'TPFL Approach',
    'description'=>__('A Block with title brief and three card layout'),
    'render_template'=>__('template-parts/blocks/investment/our-approach.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL","Approach","Our Approach","Custom Approach Block")
  ));
  
  acf_register_block_type(array(
    'name'=>'tpfl-philosophy',
    'title'=>'TPFL Philosophy',
    'description'=>__('A Block with title brief and two card layout in a column'),
    'render_template'=>__('template-parts/blocks/investment/philosophy.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL","Philosophy","Our Philosophy","Custom Philosophy Block")
  ));
  
  acf_register_block_type(array(
    'name'=>'tpfl-investment-tab',
    'title'=>'TPFL Investment Tab',
    'description'=>__('A Block with image on the left and tab on the right'),
    'render_template'=>__('template-parts/blocks/investment/investment-tab.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL","Investment Tab","Our Investment Tab","Custom Investment Tab Block")
  ));
  
  acf_register_block_type(array(
    'name'=>'tpfl-contact-us-intro',
    'title'=>'TPFL Contact Page Intro',
    'description'=>__('A Block to add content for contact us page intro.'),
    'render_template'=>__('template-parts/blocks/contact-us/contact-us.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL Contact Page Intro","Custom Contact Info Block")
  ));
  
  acf_register_block_type(array(
    'name'=>'tpfl-contact-form',
    'title'=>'TPFL Contact Form',
    'description'=>__('A Block to enable or disable contact Form.'),
    'render_template'=>__('template-parts/blocks/contact-us/contact-form.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL Contact Form","Custom Contact Form", "Form")
  ));
    
  acf_register_block_type(array(
    'name'=>'enable-career-listing',
    'title'=>'Enable Disable Career Listing',
    'description'=>__('A Block to enable or disable career listing.'),
    'render_template'=>__('template-parts/blocks/career/career-listing.php'),
    'category'=>'widget',
    'icon'=>'images-alt2',
    'keywords'=> array("TPFL Career Listing","Career", "Listing")
  ));
}