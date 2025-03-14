<?php

/*
@package ndo
=========================
Blocks
=========================
*/


function register_acf_block_types()
{
    acf_register_block_type(array(
        'name' => 'block-txt-left',
        'title' => __('block-txt-left'),
        'description' => __('Blok met links tekst'),
        'render_template' => 'parts/blocks/block-txt-left.php',
        'mode' => 'edit',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Block', 'left', 'tekst'),
    ));
    acf_register_block_type(array(
        'name' => 'block-txt-right',
        'title' => __('block-txt-right'),
        'description' => __('Blok met right tekst'),
        'render_template' => 'parts/blocks/block-txt-right.php',
        'mode' => 'edit',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Block', 'right', 'tekst'),
    ));
    acf_register_block_type(array(
        'name' => 'block-swiper',
        'title' => __('block-swiper'),
        'description' => __('Blok waarin een swiper met afbeeldingen komt'),
        'render_template' => 'parts/blocks/block-swiper.php',
        'mode' => 'edit',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Block', 'right', 'tekst'),
    ));
    acf_register_block_type(array(
        'name' => 'block-hoofd-sponsor',
        'title' => __('block-hoofd-sponsor'),
        'description' => __('Blok waarin de hoofdsponsoren komen'),
        'render_template' => 'parts/blocks/block-hoofd-sponsor.php',
        'mode' => 'edit',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Block', 'sponsor', 'hoofd', 'logo'),
    ));
    acf_register_block_type(array(
        'name' => 'block-hero',
        'title' => __('block-hero'),
        'description' => __('Blok bovenaan de home page'),
        'render_template' => 'parts/blocks/block-hero.php',
        'mode' => 'edit',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Block', 'home', 'hero'),
    ));
}

add_action('acf/init', 'register_acf_block_types');
