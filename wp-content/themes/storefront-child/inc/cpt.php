<?php
add_action('init', 'project_register');

function project_register()
{
    global $themename;
    $labels = array(
        'name' => __('Dự án', 'post type general name', $themename),
        'singular_name' => __('Dự án', 'post type singular name', $themename),
        'add_new' => __('Thêm mới', 'project', $themename),
        'add_new_item' => __('Thêm dự án', $themename),
        'edit_item' => __('Edit project', $themename),
        'new_item' => __('New project', $themename),
        'view_item' => __('View project', $themename),
        'search_items' => __('Search project', $themename),
        'not_found' => __('No project have been added yet', $themename),
        'not_found_in_trash' => __('Nothing found in project', $themename),
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

    register_post_type('project', $args);
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
