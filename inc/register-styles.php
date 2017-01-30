<?php

function venkat_register_styles(){

  // register bootstrap
  wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.css') );

  //register main.css
  wp_enqueue_style('maincss', get_theme_file_uri('assets/css/main.css'));

  // add style.css
  wp_enqueue_style('style', get_stylesheet_uri() );

  //register tether js and jquery
  wp_enqueue_script('tetherjs', get_theme_file_uri('assets/js/tether.js'), array('jquery'), 1.0, true);

  // register bootstarp js
   wp_enqueue_script('bootstrapjs', get_theme_file_uri('assets/js/bootstrap.js'), array('jquery'), 1.0, true);

  // register main js
   wp_enqueue_script('rest', get_theme_file_uri('assets/js/main.js'), null, 1.0, true);

}

add_action( 'wp_enqueue_scripts', 'venkat_register_styles');


 ?>
