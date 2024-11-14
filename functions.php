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

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Cài đặt Website',  // Tiêu đề trang Options
        'menu_title'    => 'Cài đặt Website',  // Tiêu đề menu trong bảng điều khiển WordPress
        'menu_slug'     => 'cai-dat-website',   // Đường dẫn URL để truy cập trang này
        'capability'    => 'edit_posts',         // Quyền truy cập, người có quyền "edit_posts" sẽ thấy trang này
        'redirect'      => false                 // Không chuyển hướng sau khi tạo
    ));
}


$file_includes = [
    'inc/theme-setup.php',                  // General theme setting
    'inc/acf-options.php',                  // ACF Option page
    'inc/duplicate.php',              // Dupplicate Post   
    'inc/mega-menu.php',              // Mega Menu           
];
foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }
    require_once $filePath;
}
unset($file, $filePath);

add_theme_support( 'post-thumbnails' );


?>




