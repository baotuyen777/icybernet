<?php

add_action('comment_post', 'save_comment_meta_data');
function save_comment_meta_data($comment_id)
{
    if ((isset($_POST['phone'])) && ($_POST['phone'] != '')) {
        $phone = wp_filter_nohtml_kses($_POST['phone']);//loại bỏ html tag trong nội dung POST
        add_comment_meta($comment_id, 'phone', $phone);
    }
}

