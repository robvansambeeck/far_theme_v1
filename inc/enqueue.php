<?php

/*
@package (theme_name)
=========================
ADMIN ENQUEUE FUNCTIONS
=========================
*/

/* FRONT-END SCRIPTS */
function (theme_name)_script_enqueue()
{
    //fonts and icons
    wp_enqueue_style('Play', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet', false);
    //css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/(theme_name).css', array(), '1.0', 'all');
    //js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/(theme_name).js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', '(theme_name)_script_enqueue');
