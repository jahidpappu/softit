<?php


function first_theme_functions (){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','first_theme_functions');