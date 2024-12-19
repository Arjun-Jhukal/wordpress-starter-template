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
}