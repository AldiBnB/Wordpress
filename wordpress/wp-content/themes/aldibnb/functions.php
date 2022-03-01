<?php


// require 'Classes/MultiImageUpload.php';
// $checkbox = new ImageInput('AldiBnbImages');

function AldiBnbSetupTheme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
}



function Bootstrap()
{
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script("bootstrap_js", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", [], false, true);
}

add_action('after_setup_theme', 'AldiBnbSetupTheme');
add_action('wp_enqueue_scripts', 'Bootstrap');
