<?php

add_action('comment_post', 'save_comment_meta_data');
function save_comment_meta_data($comment_id)
{
    if ((isset($_POST['phone'])) && ($_POST['phone'] != '')) {
        $phone = wp_filter_nohtml_kses($_POST['phone']);//loại bỏ html tag trong nội dung POST
        add_comment_meta($comment_id, 'phone', $phone);
    }
}

// Manage comment submissions
function preprocess_new_comment($commentdata)
{
    if (isset($_POST['comment_type']) && $_POST['comment_type'] == 'comment') {
        $commentdata['comment_type'] = 'comment';
    }

    return $commentdata;
}

add_action('preprocess_comment', 'preprocess_new_comment');
