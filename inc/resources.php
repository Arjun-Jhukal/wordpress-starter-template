<?php

function tpfl_scripts_enqueue(){
  wp_enqueue_style("bootstrap-CSS", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(), "5.3.3",null);
  
  wp_enqueue_style("custom-style-CSS", get_template_directory_uri() . "/assets/css/styles.css",array(), "1.0.0",null);

  
  wp_enqueue_script("jQuery","https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), "3.7.1", null);
  wp_enqueue_script("jQuery", get_template_directory_uri() . "/assets/js/script.min.js", array(), "3.7.1", null);
}