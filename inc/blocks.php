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
}

add_action('acf/init', 'register_acf_block_types');
