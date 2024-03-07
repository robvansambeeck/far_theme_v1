<?php

/*
@package far
=========================
ADMIN ENQUEUE FUNCTIONS
=========================
*/

/* FRONT-END SCRIPTS */
function far_script_enqueue()
{
    //fonts and icons
    wp_enqueue_style('Play', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet', false);
    wp_enqueue_style('fontawesome', 'https://kit.fontawesome.com/de3d3e56bd.css', false);
    //css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/far.css', array(), '1.0', 'all');
    //js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/far.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'far_script_enqueue');
