<?php

add_theme_support('menus');
add_theme_support('post-thumbnails', array('post', 'page'));

// SVG support
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function register_tpfl_menu(){
  register_nav_menu("primary-menu", __("Primary Menu",'tpfl'));
  register_nav_menu("quick-links", __("Quick Links",'tpfl'));
  register_nav_menu("company", __("Company Menu",'tpfl'));  
}

add_action('after_setup_theme', 'register_tpfl_menu');