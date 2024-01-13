<?php
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header'); 
add_theme_support('post-thumbnails');

register_nav_menus (
  array(

    'header menu'     =>'Header menu',
    'footer menu'     =>'Footer menu',
    'sidebar  menu'     =>'Sidebar  menu',
  )
  );
?>
