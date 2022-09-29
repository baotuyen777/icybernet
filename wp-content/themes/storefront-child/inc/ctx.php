<?php
function nano_custom_taxonomy_Item()  {
    $labels = array(
        'name'                       => 'Nhóm sản phẩm',
        'singular_name'              => 'Nhóm sản phẩm',
        'menu_name'                  => 'Nhóm sản phẩm',
//        'all_items'                  => 'All Nhóm',
//        'parent_item'                => 'Parent Nhóm',
//        'parent_item_colon'          => 'Parent Nhóm:',
//        'new_item_name'              => 'New Nhóm Name',
//        'add_new_item'               => 'Add New Nhóm',
//        'edit_item'                  => 'Edit Nhóm',
//        'update_item'                => 'Update Nhóm',
//        'separate_items_with_commas' => 'Separate Nhóm with commas',
//        'search_items'               => 'Search Nhóm',
//        'add_or_remove_items'        => 'Add or remove Nhóm',
//        'choose_from_most_used'      => 'Choose from the most used Nhóm',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'group', 'product', $args );
}
add_action( 'init', 'nano_custom_taxonomy_item', 0 );