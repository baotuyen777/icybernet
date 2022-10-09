<?php
//add_filter('show_admin_bar', '__return_false');
require 'inc/cpt.php';
require 'inc/ctx.php';
require 'inc/icon.php';
require 'inc/config.php';
require 'inc/comment_cutomize.php';

//sidebar
add_action('widgets_init', 'david_widgets_init');
function david_widgets_init()
{
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

function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
    wp_dequeue_style('storefront-gutenberg-blocks');
    wp_dequeue_style('storefront-style');

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', [], null, true);
    if (is_product()) {
        wp_enqueue_style('detail', get_stylesheet_directory_uri() . '/css/detail.css');
    }
    wp_enqueue_style('detail', get_stylesheet_directory_uri() . '/css/cart.css');
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


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


//add_filter('comment_form_default_fields', 'custom_fields');
//function custom_fields($fields)
//{
//
//    $commenter = wp_get_current_commenter();
//    $req = get_option('require_name_email');
//    $aria_req = ($req ? " aria-required='true'" : '');
//
//    $fields['author'] = '<p class="comment-form-author">' .
//        '<label for="author">' . __('Name') . '</label>' .
//        ($req ? '<span class="required">*</span>' : '') .
//        '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
//        '" size="30" tabindex="1"' . $aria_req . ' /></p>';
//
////    $fields[ 'email' ] = '<p class="comment-form-email">'.
////        '<label for="email">' . __( 'Email' ) . '</label>'.
////        ( $req ? '<span class="required">*</span>' : '' ).
////        '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
////        '" size="30"  tabindex="2"' . $aria_req . ' /></p>';
////
////    $fields[ 'url' ] = '<p class="comment-form-url">'.
////        '<label for="url">' . __( 'Website' ) . '</label>'.
////        '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
////        '" size="30"  tabindex="3" /></p>';
//
//    $fields['phone'] = '<p class="comment-form-phone">' .
//        '<label for="phone">' . __('Phone') . '</label>' .
//        '<input id="phone" name="phone" type="text" size="30"  tabindex="4" /></p>';
//
//    return $fields;
//}

