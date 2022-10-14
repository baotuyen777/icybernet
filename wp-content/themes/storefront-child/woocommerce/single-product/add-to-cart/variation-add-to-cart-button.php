<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button flex">
    <?php do_action('woocommerce_before_add_to_cart_button'); ?>

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
    $link = wc_get_checkout_url() . '?add-to-cart=' . get_the_ID() . '&variation_id=256';
    ?>

    <button type="submit"
            class="single_add_to_cart_button button alt add_to_cart_button"><?php echo CART ?>Thêm vào giỏ hàng</button>
    <a href="<?php echo $link ?>" class="buy-now button add_to_cart_button ajax_add_to_cart added buy_now">Mua ngay</a>
    <?php do_action('woocommerce_after_add_to_cart_button'); ?>

    <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>"/>
    <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>"/>
    <input type="hidden" name="variation_id" class="variation_id" value="0"/>
</div>
