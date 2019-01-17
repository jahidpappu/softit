<?php


function first_theme_functions (){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('woocommerce');

  add_theme_support('custom_header');
  add_theme_support('custom_background');
}
add_action('after_setup_theme','first_theme_functions');


 