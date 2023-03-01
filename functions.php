<?php

include(get_template_directory() .  "/functions/enqueue.php");
include(get_template_directory() . "/functions/menus.php");

if (function_exists("add_theme_support")) {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );    
    load_theme_textdomain("replace-text-domain", get_template_directory() . "/languages");

    if(class_exists("WooCommerce")) {
        add_theme_support("woocommerce");
    }
}