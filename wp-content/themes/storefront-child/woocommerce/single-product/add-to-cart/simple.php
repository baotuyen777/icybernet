<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
    return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>

    <?php do_action('woocommerce_before_add_to_cart_form'); ?>

    <form class="cart" method="post" enctype='multipart/form-data'>
        <div class="quantity_wrapper">
            <?php
            do_action('woocommerce_before_add_to_cart_quantity');

            woocommerce_quantity_input(
                array(
                    'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                    'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                    'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                )
            );

            do_action('woocommerce_after_add_to_cart_quantity');
            ?>
        </div>
        <div class="woocommerce-variation-add-to-cart variations_button flex flex_wrap">
            <?php do_action('woocommerce_before_add_to_cart_button'); ?>

            <a href="javascript:void(Tawk_API.toggle())"
               class="button product_type_simple add_to_cart_button"> <?php echo CHAT ?> Chat ngay</a>
            <!--        <a href="?add-to-cart=--><?php //the_ID() ?><!--" data-quantity="1"-->
            <!--           class="button product_type_simple add_to_cart_button ajax_add_to_cart added"-->
            <!--           data-product_id="--><?php //the_ID() ?><!--" data-product_sku="">-->
            <!--            --><?php //echo CART ?><!--Th??m v??o gi??? h??ng</a>-->
            <button type="submit" name="add-to-cart" value="
        <?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt">
                <?php echo esc_html($product->single_add_to_cart_text()); ?></button>
            <!--            <a href="-->
            <?php //echo $link ?><!--" class="buy-now button ajax_add_to_cart added buy_now">Mua ngay</a>-->
            <button formaction="<?php echo wc_get_checkout_url() ?>" class="btn buy_now">Mua ngay</button>

            <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>"/>
            <?php do_action('woocommerce_after_add_to_cart_button'); ?>
        </div>
    </form>

    <?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php endif; ?>
