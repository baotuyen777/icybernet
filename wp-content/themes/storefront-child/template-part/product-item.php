<?php global $product; ?>

<div class="product">
    <a data-sqe="link" href="<?php echo the_permalink() ?>">
        <div class="uA1waf">
            <?php echo woocommerce_get_product_thumbnail('full') ?>
            <div class="X5j9y1">
                <div class="VGupoO wuWR8e"
                     style="color: rgb(242, 82, 32);">
                    <span class="_6UEPfo"><?php the_field('product_label');?></span>
                </div>
            </div>
            <div class="vmaKHl">
                <div class="C2-vN- dCT7bq Od5TJM">
                    <span class="percent">31%</span><span class="mXP-A3">giảm</span>
                </div>
            </div>

            <div class="W3bJfG">
                <div class="qUEEG4">
                    <div class="hPc1Pf">
                        <div class="vc0PvV AxYdVM"><?php the_title() ?></div>
                    </div>
                    <div class="bVKmWS"><?php echo FREESHIP ?></div>
                </div>
                <div class="imdVqB _2fuFWg">
                    <div class="WSVId4 fepoRf"><span
                                class="j0vBz2"><?php echo number_format($product->get_price()) ?></span>
                    </div>
                    <div class="upl8wJ _82UoSS">Đã bán <?php echo get_field('quantity_sold') ?></div>
                </div>
            </div>
            <div class="shopee-item-card__hover-footer _1X2yZq">
                Xem ngay
            </div>
        </div>
    </a>
</div>
