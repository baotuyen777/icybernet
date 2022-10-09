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
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
    <main role="main" class="container">
        <section class="block1 white">
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action('woocommerce_before_single_product_summary');
            ?>
            <!--        <div class="white">-->
            <div class="summary entry-summary padding20">
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
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            $fields =  array(
                'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                'phone'  => '<p class="comment-form-email"><label for="email">' . __( 'Điện thoại' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="phone" name="phone" type="text" value="" size="30"/></p>',
            );
            $comments_args = array(
                'fields' =>  $fields,
                 'title_reply'=>'Bình luận',
            );
            comment_form($comments_args);
//            comment_form()
            ?>
            <div class="clearfix"></div>
        </section>
    </main>
</div>

<?php //do_action( 'woocommerce_after_single_product' ); ?>
