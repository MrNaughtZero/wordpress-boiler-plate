<?php

add_action('after_setup_theme', 'register_menus');
function register_menus()
{
    register_nav_menu('main', 'Main');
    register_nav_menu('mobile', 'Mobile Menu');
    register_nav_menu('footer', 'Footer');
}
