<?php

require 'inc/cpt.php';
require 'inc/ctx.php';
require 'inc/icon.php';
require 'inc/config.php';

//sidebar
add_action('widgets_init', 'david_widgets_init');
function david_widgets_init() {
    register_sidebar(array(
        'name' => __('Shop sidebar', 'david'),
        'id' => 'sidebar-shop',
        'description' => __('Widgets in this area will be shown on shop pages.', 'david'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
}

//add_filter('auto_update_plugin', '__return_false');
// Load the theme stylesheets
//function theme_styles() {
//    wp_enqueue_style('main1', get_stylesheet_directory_uri() . '/style.css');
//}
//
//// Update CSS within in Admin
//function admin_style() {
//    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/css/admin.css');
//}
//
//add_action('admin_enqueue_scripts', 'admin_style');
//
//add_action('get_footer', 'theme_styles');
//
//require 'options/options.php';
//$options = get_option('general_option');
//
//if (isset($options['hrm_title'])) {
//    $title = $options['hrm_title'];
//}
////var_dump($options);
////sidebar
//add_action('widgets_init', 'david_widgets_init');
//function david_widgets_init() {
//    register_sidebar(array(
//        'name' => __('Shop sidebar', 'david'),
//        'id' => 'sidebar-shop',
//        'description' => __('Widgets in this area will be shown on shop pages.', 'david'),
//        'before_widget' => '<div id="%1$s" class="widget %2$s">',
//        'after_widget' => '</div>',
//        'before_title' => '',
//        'after_title' => '',
//    ));
//}




