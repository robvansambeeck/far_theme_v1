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
    wp_enqueue_style('Barlow', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Rye&display=swap" rel="stylesheet', false);
    wp_enqueue_style('Rye', 'https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet', false);
    wp_enqueue_style('fontawesome', 'https://kit.fontawesome.com/de3d3e56bd.css', false);
    //css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/far.css', array(), '1.0', 'all');
    //js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/far.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'far_script_enqueue');
