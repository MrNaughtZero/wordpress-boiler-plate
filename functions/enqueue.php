<?php

if (!defined('BUILD_CSS_URI')) {
    define('BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/dist/css');
}

if (!defined('BUILD_CSS_DIR_PATH')) {
    define('BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/dist/css');
}

if (!defined('BUILD_JS_URI')) {
    define('BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/dist/js');
}

if (!defined('BUILD_JS_DIR_PATH')) {
    define('BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/dist/js');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
    wp_enqueue_script('main', BUILD_JS_URI . '/main.min.js', [], filemtime(BUILD_JS_DIR_PATH . '/main.min.js'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_styles() {
    wp_enqueue_style('main', BUILD_CSS_URI . '/main.min.css', [], filemtime(BUILD_CSS_DIR_PATH . '/main.min.css'));
}

add_action('wp_head', function () { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<?php });