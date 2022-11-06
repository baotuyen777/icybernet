<div class="shopee-header-section shopee-header-section--simple">
    <div class="shopee-header-section__header">
        <div class="shopee-header-section__header__title">

            <div class="uqKrnc">
                <div class="_0+e+wK">
                    <div class="sQ9tKt"></div>
                    <div class="shopee-countdown-timer Esi0xY">
                        <span class="title">FLASH SALE</span>
                        <div class="countdown">
                            <span id="h">Giờ</span>
                            <span id="m">Phút</span>
                            <span id="s">Giây</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="shopee-header-section__header-link" tabindex="-1"
           href="<?php echo get_term_link(TERM_FLASH) ?>">Xem tất cả&nbsp;<svg
                    enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                    y="0" class="shopee-svg-icon icon-arrow-right">
                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
            </svg>
        </a>
    </div>
    <ul class="flex">
        <?php

        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 6,
            'tax_query' => array(
                array(
                    'taxonomy' => 'group',
                    'field' => 'term_id',
                    'terms' => TERM_FLASH
                )
            )
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $percent_sale = getPercentSale($product);
            ?>
            <li class="col-2">
                <div class="fR2ZHc KgcLFb">
                    <a href="<?php the_permalink(); ?>">
                        <div class="relative">
                            <?php if ($product->is_on_sale()): ?>
                                <div class="VeRrqr">
                                    <div class="_5ICO3M yV54ZD X7gzZ7 shopee-badge">
                                        <div class="_8PundJ"><span
                                                    class="percent"><?php echo $percent_sale?>%</span><span
                                                    class="tSV5KQ">giảm</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <img class="product_label_bottom"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/img/hhgt.png"/>

                            <?php echo woocommerce_get_product_thumbnail('thumbnail') ?>
                        </div>
                        <div class="TNHm44">
                            <div class="eHG6HN XEjq6m _0RSZ+W">
                                <div class="jGqYd- XEjq6m _0RSZ+W">
                                    <div class="R30Osg yziZbM -922Xl">
                                        <div class="bkz28I"><span
                                                    class="_7FEDbD yziZbM -922Xl">₫</span><?php echo number_format($product->get_price()) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="shMEm0 XEjq6m">
                                    <div class="fR8rXH _15Ul6k">
                                        <div class="HIIASx">
                                            <div class="Ygavkn">Đã
                                                bán <?php the_field('quantity_sold_flash'); ?></div>
                                            <div class="NiQ2DI">
                                                <div class="NwnNg9"
                                                     style="width: <?php the_field('quantity_sold_flash'); ?>%;">
                                                    <div class="zYeAeX"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        <?php endwhile;
        wp_reset_query(); ?>
    </ul>
</div>
