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
}