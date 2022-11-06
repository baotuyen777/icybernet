<?php
function getPercentSale($product)
{
    $percentages = array(
        'min' => false,
        'max' => false,
    );

    switch ($product->get_type()) {
        case 'grouped':
            $children = array_filter(array_map('wc_get_product', $product->get_children()), 'wc_products_array_filter_visible_grouped');

            foreach ($children as $child) {
                if ($child->is_purchasable() && !$child->is_type('grouped') && $child->is_on_sale()) {
                    $child_percentage = cssigniter_woocommerce_get_product_sale_percentages($child);

                    $percentages['min'] = false !== $percentages['min'] ? $percentages['min'] : $child_percentage['min'];
                    $percentages['max'] = false !== $percentages['max'] ? $percentages['max'] : $child_percentage['max'];

                    if ($child_percentage['min'] < $percentages['min']) {
                        $percentages['min'] = $child_percentage['min'];
                    }

                    if ($child_percentage['max'] > $percentages['max']) {
                        $percentages['max'] = $child_percentage['max'];
                    }
                }
            }

            break;

        case 'variable':
            $prices = $product->get_variation_prices();

            foreach ($prices['price'] as $variation_id => $price) {
                $regular_price = (float)$prices['regular_price'][$variation_id];
                $sale_price = (float)$prices['sale_price'][$variation_id];

                if ($sale_price < $regular_price) {
                    $variation_percentage = (($regular_price - $sale_price) / $regular_price) * 100;

                    $percentages['min'] = false !== $percentages['min'] ? $percentages['min'] : $variation_percentage;
                    $percentages['max'] = false !== $percentages['max'] ? $percentages['max'] : $variation_percentage;

                    if ($variation_percentage < $percentages['min']) {
                        $percentages['min'] = $variation_percentage;
                    }

                    if ($variation_percentage > $percentages['max']) {
                        $percentages['max'] = $variation_percentage;
                    }
                }
            }
            break;

        case 'external':
        case 'variation':
        case 'simple':
        default:
            $regular_price = (float)$product->get_regular_price();
            $sale_price = (float)$product->get_sale_price();
            if(!$regular_price || !$sale_price){
                return 0;
            }

            if ($sale_price < $regular_price) {
                $percentages['max'] = (($regular_price - $sale_price) / $regular_price) * 100;
            }
    }
    return round($percentages['max']);
}


//add_action('woocommerce_product_thumbnails', 'add_product_video');
//
//function add_product_video(){
//
//    echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/JHN7viKRxbQ' frameborder='0' allowfullscreen></iframe>";
//
//}