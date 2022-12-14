<?php
add_action('init', 'video_register');

function video_register()
{
    global $themename;
    $labels = array(
        'name' => __('Video', 'post type general name', $themename),
        'singular_name' => __('Video', 'post type singular name', $themename),
        'add_new' => __('Thêm mới', 'video', $themename),
        'add_new_item' => __('Thêm Video', $themename),
        'edit_item' => __('Edit video', $themename),
        'new_item' => __('New video', $themename),
        'view_item' => __('View video', $themename),
        'search_items' => __('Search video', $themename),
        'not_found' => __('No video have been added yet', $themename),
        'not_found_in_trash' => __('Nothing found in video', $themename),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => false,
    );

    register_post_type('video', $args);
}

add_action('init', 'create_branch', 0);
function create_branch()
{
    register_taxonomy(
        'branch',
        'product',
        array(
            'labels' => array(
                'name' => __('Nhãn hiệu'),
                'add_new_item' => 'Thêm mới',
                'new_item_name' => "Thêm mới"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'sort' => 1,
        )
    );
}
