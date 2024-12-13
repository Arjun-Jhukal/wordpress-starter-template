<?php

function tpfl_scripts_enqueue(){
  /* Bootstrap */
  wp_enqueue_style("bootstrap-CSS", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(), "5.3.3",null);
  
  /** Slick */
  wp_enqueue_style("Slick-CSS","https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), "1.9.0", null);
  wp_enqueue_style("Slick-Theme-CSS","https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css", array(), "1.9.0", null);

    /** Custom CSS */
  wp_enqueue_style("custom-style-CSS", get_template_directory_uri() . "/assets/css/styles.css",array(), "1.0.0",null);

    /** JQuery */
  wp_enqueue_script("jQuery","https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), "3.7.1", null);
  
    /** Slick */
  wp_enqueue_script("Slick-JS","https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", array(), "1.9.0", null);

    /** Custom JS */
  wp_enqueue_script("custom-script", get_template_directory_uri() . "/assets/js/script.min.js", array(), "3.7.1", null);
}

add_action("wp_enqueue_scripts", "tpfl_scripts_enqueue");