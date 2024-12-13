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
}