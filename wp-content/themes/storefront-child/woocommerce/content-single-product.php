<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
global $post;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
$gifts = get_field('gift');
$gift_condition = get_field('gift_condition');
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
    <main role="main" class="container">
        <section class="block1">
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action('woocommerce_before_single_product_summary');
            $rating_count = $product->get_rating_count();
            $review_count = $product->get_review_count();
            $average = $product->get_average_rating();
            $short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);
            ?>
            <!--        <div class="white">-->
            <div class="summary entry-summary">
                <div class="product_title">
                    <?php the_title('<h1 class="product_title entry-title">', '</h1>'); ?>
                    <?php echo wc_get_rating_html($average, $rating_count); // WPCS: XSS ok. ?>
                    <span class="rating_avg"><?php echo round($average, 1) ?></span>
                    <span class="sold_number">Đã bán <?php echo get_field('quantity_sold', $product->get_id()); ?></span>
                    <p class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>">
                        <?php echo $product->get_price_html(); ?></p>
                </div>

                <div class="woocommerce-product-details__short-description">
                    <div class="flex">
                        <div class="des_label">Vận chuyển: </div>
                        <div>
                            <?php if(get_field('freeship')):?>
                            <div class="pJhgZK"> 30.000 ₫</div>
                            <div class="ship_fee">Miễn phí ship khi đơn hàng trên 200.000₫ <?php echo FREESHIP ?></div>
                            <?php else:?>
                                <div class="ship_fee">Free ship <?php echo FREESHIP ?></div>
                            <?php endif;?>
                        </div>

                    </div>
                    <?php echo $short_description; // WPCS: XSS ok. ?>
                </div>
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action('woocommerce_single_product_summary');
                ?>


            </div>
            <div class="clearfix"></div>
        </section>
        <?php if ($gifts): ?>
            <section class="white padding20">
                <h4><?php echo $gift_condition ?></h4>
                <ul class="flex">
                    <?php

                    foreach ($gifts as $post):
                        setup_postdata($post);
                        ?>
                        <li class="white col-2 p-b-30">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                                <div class="cXODCZ"><?php the_title() ?></div>
                            </a>
                        </li>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>
                </ul>
            </section>
        <?php endif; ?>
        <section class="white padding20 relative">
            <h3 class="_2N2_VN">MÔ TẢ SẢN PHẨM</h3>
            <div class="compact_box">
                <?php the_content(); ?>
            </div>

            <div class="compact_control">
                <div class="bg-article"></div>
                <button class="btn btn_show_all">Xem thêm</button>
            </div>

        </section>
        <section class="white padding20">
            <h3 class="_2N2_VN">ĐÁNH GIÁ SẢN PHẨM</h3>
            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            //            do_action('woocommerce_after_single_product_summary');
            //            call_user_func( 'comments_template', 'reviews' );
            //            comments_template('reviews')
            comments_template('comments.php');
            ?>
        </section>

        <section class="white padding20">
            <?php
            $commenter = wp_get_current_commenter();
            $req = get_option('require_name_email');
            $aria_req = ($req ? " aria-required='true'" : '');
            $fields = array(
                'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
                    '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
                'email' => '<p class="comment-form-email"><label for="email">' . __('Email') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
                    '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
                'phone' => '<p class="comment-form-email"><label for="email">' . __('Điện thoại') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
                    '<input id="phone" name="phone" type="text" value="" size="30"/></p>',
            );
            $comments_args = array(
                'fields' => $fields,
                'title_reply' => 'Bình luận',
            );
            comment_form($comments_args);
            //            comment_form()
            ?>
            <div class="clearfix"></div>
        </section>
    </main>
</div>

<?php //do_action( 'woocommerce_after_single_product' ); ?>
