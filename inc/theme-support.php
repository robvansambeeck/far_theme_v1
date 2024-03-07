<?php

/*
@package far
=========================
Theme Support Options
=========================
*/

/*MENUS */
function far_theme_setup()
{
  add_theme_support('menus');
  register_nav_menu('main', 'Main Menu');
}
add_action('init', 'far_theme_setup');

/*POSTS and FORMATS*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));
add_theme_support('hmtl5', array('search-form'));
add_post_type_support('page', 'excerpt');
add_theme_support('custom-logo');
