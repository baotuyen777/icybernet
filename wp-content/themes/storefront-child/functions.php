<?php
require 'inc/cpt.php';
add_filter('auto_update_plugin', '__return_false');
// Load the theme stylesheets
function theme_styles() {
    wp_enqueue_style('main1', get_stylesheet_directory_uri() . '/style.css');
}

// Update CSS within in Admin
function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/css/admin.css');
}

add_action('admin_enqueue_scripts', 'admin_style');

add_action('get_footer', 'theme_styles');

require 'options/options.php';
$options = get_option('general_option');

if (isset($options['hrm_title'])) {
    $title = $options['hrm_title'];
}
//var_dump($options);
//sidebar
add_action('widgets_init', 'david_widgets_init');
function david_widgets_init() {
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

//price
if (!function_exists('my_commonPriceHtml')) {

    function my_commonPriceHtml($price_amt, $regular_price, $sale_price) {
        $html_price = '<p class="price">';
        //if product is in sale
        if (($price_amt == $sale_price) && ($sale_price != 0)) {
            $html_price .= '<ins>' . wc_price($sale_price) . '</ins>';
            $html_price .= '<span class="regular_price">Giá cũ: ' . wc_price($regular_price) . '</span>';
        }
        //in sale but free
//        else if (($price_amt == $sale_price) && ($sale_price == 0)) {
//            $html_price .= '<ins>Free!</ins>';
//            $html_price .= '<del>' . wc_price($regular_price) . '</del>';
//        }
        //not is sale
        else if (($price_amt == $regular_price) && ($regular_price != 0)) {
            $html_price .= '<ins>' . wc_price($regular_price) . '</ins>';
        }
        //for free product
//        else if (($price_amt == $regular_price) && ($regular_price == 0)) {
//            $html_price .= '<ins>Free!</ins>';
//        }
        $html_price .= '</p>';
        return $html_price;
    }

}

//add_filter('woocommerce_get_price_html', 'my_simple_product_price_html', 100, 2);

function my_simple_product_price_html($price, $product) {
    if ($product->is_type('simple')) {
        $regular_price = $product->regular_price;
        $sale_price = $product->sale_price;
        $price_amt = $product->price;
        return my_commonPriceHtml($price_amt, $regular_price, $sale_price);
    } else {
        return $price;
    }
}

add_filter('woocommerce_variation_sale_price_html', 'my_variable_product_price_html', 10, 2);
add_filter('woocommerce_variation_price_html', 'my_variable_product_price_html', 10, 2);

function my_variable_product_price_html($price, $variation) {
    $variation_id = $variation->variation_id;
//creating the product object
    $variable_product = new WC_Product($variation_id);

    $regular_price = $variable_product->regular_price;
    $sale_price = $variable_product->sale_price;
    $price_amt = $variable_product->price;

    return my_commonPriceHtml($price_amt, $regular_price, $sale_price);
}

add_filter('woocommerce_variable_sale_price_html', 'my_variable_product_minmax_price_html', 10, 2);
add_filter('woocommerce_variable_price_html', 'my_variable_product_minmax_price_html', 10, 2);

function my_variable_product_minmax_price_html($price, $product) {
    $variation_min_price = $product->get_variation_price('min', true);
    $variation_max_price = $product->get_variation_price('max', true);
    $variation_min_regular_price = $product->get_variation_regular_price('min', true);
    $variation_max_regular_price = $product->get_variation_regular_price('max', true);

    if (($variation_min_price == $variation_min_regular_price) && ($variation_max_price == $variation_max_regular_price)) {
        $html_min_max_price = $price;
    } else {
        $html_price = '<p class="price">';
        $html_price .= '<ins>' . wc_price($variation_min_price) . '-' . wc_price($variation_max_price) . '</ins>';
        $html_price .= '<del>' . wc_price($variation_min_regular_price) . '-' . wc_price($variation_max_regular_price) . '</del>';
        $html_min_max_price = $html_price;
    }

    return $html_min_max_price;
}

add_filter('woocommerce_product_add_to_cart_text', 'bbloomer_archive_custom_cart_button_text');
function bbloomer_archive_custom_cart_button_text() {
    return __('Thêm vào giỏ hàng');
}

function filter_price() {
    $arr = [
        ['id' => 1, 'min' => 0, 'max' => 500000,],
        ['id' => 2, 'min' => 500000, 'max' => 2000000,],
        ['id' => 3, 'min' => 2000000, 'max' => 5000000,],
        ['id' => 4, 'min' => 5000000, 'max' => 10000000,],
        ['id' => 5, 'min' => 10000000, 'max' => 20000000,],
        ['id' => 6, 'min' => 20000000, 'max' => 100000000,],
    ];
    ?>
    <h4>Giá</h4>
    <ul class="woof_list">
        <?php
        $current_min = isset($_GET['min_price']) ? $_GET['min_price'] : false;
        $current_max = isset($_GET['max_price']) ? $_GET['max_price'] : false;
        ?>
        <?php foreach ($arr as $option):
            $param = $_GET;
//            $param['min_price'] = $current_min && $current_min> $option['min'] ? $current_min$option['min'] :  ;
            $param['min_price'] = $option['min'];
            $param['max_price'] = $option['max'];
            $link = http_build_query($param);
            $checked = $current_min <= $option['min'] && $current_max >= $option['max'] ? 'checked="checked"' : '';
            ?>
            <li>

                <label for="filter_price<?php echo $option['id'] ?>" class="container">
                    <input type="checkbox" class="filter_price" id="filter_price<?php echo $option['id'] ?>"
                           data-link="<?php echo $link ?>"
                           data-min="<?php echo $option['min'] ?>"
                           data-max="<?php echo $option['max'] ?>" <?php echo $checked ?>/>
                    <?php echo number_format($option['min']) ?>
                    <span class="woocommerce-Price-currencySymbol">₫</span>~<?php echo number_format($option['max']) ?>
                    <span class="woocommerce-Price-currencySymbol">₫</span>
                    <span class="checkmark"></span>
                </label>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args) {
    if ($args->theme_location == 'primary') {
        $items .= '<li class="switcher_list">' . do_shortcode('[gtranslate]') . '</li>';
    }

    return $items;
}

// add_filter('woocommerce_get_image_size_single', 'crop_wc_image_single');
// function crop_wc_image_single($size) {
//     return [
//         'height' => 300,
//         'width' => 500,
//         'crop' => 1];
// }

add_filter('woocommerce_product_tabs', 'woo_custom_product_tabs');
function woo_custom_product_tabs($tabs) {

    // 1) Removing tabs
    unset($tabs['description']);
    unset($tabs['reviews']);               // Remove the reviews tab
//    unset( $tabs['additional_information'] );   // Remove the additional information tab


    // 2 Adding new tabs and set the right order

    //Attribute Description tab
    $tabs['together_tab'] = array(
        'title' => __('Desc', 'woocommerce'),
        'priority' => 100,
        'callback' => 'woo_attrib_desc_tab_content'
    );
    return $tabs;

}

// New Tab contents

function woo_attrib_desc_tab_content() {
    // The attribute description tab content
    $option = get_option('general_option');
    $specification = get_field('specification');
    ?>
    <h3><?php echo __('Chi tiết sản phẩm') ?></h3>
    <div><?php the_content() ?></div>
    <?php if ($specification): ?>
        <h3><?php echo __('Thông số kỹ thuật sản phẩm') ?></h3>
        <div><?php echo $specification; ?> </div>
    <?php endif; ?>
    <h3><?php echo __('Giao hàng & hoàn tiền') ?></h3>
    <div><?php echo isset($option['shipping']) ? $option['shipping'] : ""; ?></div>
    <?php
}

?>


