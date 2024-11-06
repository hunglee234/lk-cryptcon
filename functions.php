<?php
function my_basic_theme_enqueue_scripts() {
    // Đăng ký tệp CSS chính
    wp_enqueue_style('my-basic-theme-style', get_stylesheet_uri());

    // Đăng ký tệp main.css
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
}

// Thêm action để enqueue scripts
add_action('wp_enqueue_scripts', 'my_basic_theme_enqueue_scripts');

function add_custom_font_awesome() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_custom_font_awesome');


?>




