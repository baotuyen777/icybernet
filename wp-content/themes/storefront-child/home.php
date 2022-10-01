<?php
/**
 * Template Name: Home
 *
 * @package david
 */

get_header(); ?>

    <main class="home-page">
    <!--    banner-->
    <section class="container">
        <div class="full-home-banners">
            <div class="full-home-banners__main-banner">
                <div class="stardust-carousel">
                    <div class="stardust-carousel__item-list-wrapper">
                        <ul class="stardust-carousel__item-list">
                            <li class="stardust-carousel__item" style="width: 100%;">
                                <div class="stardust-carousel__item-inner-wrapper stardust-carousel__item-inner-wrapper--hide">
                                    <a class="full-home-banners__banner-image" href="">
                                        <div class="n-CE6j full-home-banners__light-background">
                                            <div class="full-home-banners__main-banner-image edy5hG"
                                                 style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/banner/banner1.jpg'); background-size: cover; background-repeat: no-repeat;"></div>
                                        </div>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="stardust-carousel__arrow stardust-carousel__arrow--type-1 stardust-carousel__arrow--prev">
                        <svg enable-background="new 0 0 13 20" viewBox="0 0 13 20" role="img"
                             class="stardust-icon stardust-icon-arrow-left-bold">
                            <path stroke="none"
                                  d="m4.2 10l7.9-7.9-2.1-2.2-9 9-1.1 1.1 1.1 1 9 9 2.1-2.1z"></path>
                        </svg>
                    </div>
                    <div class="stardust-carousel__arrow stardust-carousel__arrow--type-1 stardust-carousel__arrow--next">
                        <svg enable-background="new 0 0 13 21" viewBox="0 0 13 21" role="img"
                             class="stardust-icon stardust-icon-arrow-right-bold">
                            <path stroke="none"
                                  d="m11.1 9.9l-9-9-2.2 2.2 8 7.9-8 7.9 2.2 2.1 9-9 1-1z"></path>
                        </svg>
                    </div>
                    <div class="stardust-carousel__dots">
                        <div class="stardust-carousel__dot  stardust-carousel__dot--active"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                        <div class="stardust-carousel__dot"></div>
                    </div>
                </div>
            </div>

            <div class="full-home-banners__right-wrapper">
                <a class="full-home-banners__right-banner"
                   href="#">
                    <div class="n-CE6j full-home-banners__full-height full-home-banners__light-background">
                        <div class="full-home-banners__right-banner-image edy5hG"
                             style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/banner/banner3.jpg); background-size: cover; background-repeat: no-repeat;"></div>
                    </div>
                </a>
                <a href=""
                   class="full-home-banners__right-banner" target="_blank"
                   rel="noopener noreferrer">
                    <div class="n-CE6j full-home-banners__full-height full-home-banners__light-background">
                        <div class="full-home-banners__right-banner-image edy5hG"
                             style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/banner/banner2.jpg); background-size: cover; background-repeat: no-repeat;"></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="xZ4bbg" id="cate1">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'group',
            'hide_empty' => false,
        ));
        foreach ($terms as $term):
            ?>
            <a href="<?php echo get_term_link($term->term_id) ?>">
                <div class="KYggX9" style="width: 100px;">
                    <div class="_2Ehn-F ybDQTz">
                        <img src="<?php echo get_field('avatar', 'product_cat_' . $term->term_id); ?>"/>
                    </div>
                    <div class="KSe2W7 TF67TG"><?php echo $term->name ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </section>

    <section class="container">
        <div class="shopee-header-section shopee-header-section--simple">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title">Danh Mục</div>
            </div>
            <ul class="image-carousel__item-list">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'hierarchical' => false
                ));
                foreach ($terms as $term):
                    $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
                    $image = wp_get_attachment_url($thumbnail_id);
                    ?>
                    <li class="image-carousel__item"
                        style="padding: 0px; width: 10%;">
                        <div class="home-category-list__group">
                            <a class="home-category-list__category-grid"
                               href="<?php echo get_term_link($term->term_id) ?>">
                                <div class="_1l+Pw-">
                                    <div class="H8mXLe">
                                        <img src="<?php echo $image ?>"/>
                                    </div>
                                    <div class="cZdsLQ">
                                        <div class="C9kwfl"><?php echo $term->name ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="container">
        <div class="KaRq+P">
            <div class="shopee-header-section shopee-header-section--simple">
                <?php require 'inc/timer.php' ?>
                <ul class="image-carousel__item-list">
                    <?php
                    $arrFlash = [
                        ['img' => 'sac-du-phong-khong-day-remax-rpp281-xanh.jpg', 'price' => ''],
                        ['img' => 'cu-sac-nhanh-20W-remax-rpu75-kich-thuoc-nho-gon-1.jpg', 'price' => ''],
                        ['img' => 'sac-du-phong-khong-day-remax-rpp281-xanh.jpg', 'price' => ''],
                        ['img' => 'cu-sac-nhanh-20W-remax-rpu75-kich-thuoc-nho-gon-1.jpg', 'price' => ''],
                        ['img' => 'sac-du-phong-khong-day-remax-rpp281-xanh.jpg', 'price' => ''],
                        ['img' => 'cu-sac-nhanh-20W-remax-rpu75-kich-thuoc-nho-gon-1.jpg', 'price' => ''],
                    ];
                    foreach ($arrFlash as $flash):?>
                        <li class="image-carousel__item"
                            style="padding: 0px; width: 16.6667%;">
                            <div class="fi33Fn">
                                <div class="fR2ZHc KgcLFb">
                                    <a
                                            href="#">
                                        <div class="wswZg0 KgcLFb">
                                            <div class="aKKmc+">
                                                <div class="VeRrqr RLjQVJ eVN6BL">
                                                    <div class="_5ICO3M yV54ZD X7gzZ7 shopee-badge">
                                                        <div class="_8PundJ"><span
                                                                    class="percent">24%</span><span
                                                                    class="tSV5KQ">giảm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="DKMfci vRvZJa">
                                                    <div class="vRvZJa LKoGAt"
                                                         style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/aa811570bbc2889411efbf46c6cce891_tn.png); background-size: contain; background-repeat: no-repeat;"></div>
                                                </div>
                                                <div class="DKMfci XLRFuf">
                                                    <div class="XLRFuf LKoGAt"
                                                         style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/product/<?php echo $flash['img'] ?>); background-size: contain; background-repeat: no-repeat;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="TNHm44">
                                            <div class="eHG6HN XEjq6m _0RSZ+W">
                                                <div class="jGqYd- XEjq6m _0RSZ+W">
                                                    <div class="R30Osg yziZbM -922Xl">
                                                        <div class="bkz28I"><span
                                                                    class="_7FEDbD yziZbM -922Xl">₫</span>82.000
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shMEm0 XEjq6m">
                                                    <div class="fR8rXH _15Ul6k">
                                                        <div class="HIIASx">
                                                            <div class="Ygavkn">Đã bán 1</div>
                                                            <div class="NiQ2DI">
                                                                <div class="NwnNg9" style="width: 99%;">
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
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="homepage-mall-section container">
        <div class="shopee-header-section shopee-header-section--simple">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title">
                    <div class="_9FdTU0"><a class="ecCXWo usxt6W" href="#">Siêu khuyến
                            mại</a>
                        <div class="_5Ru4Na">
                            <div class="LetK2C"><img class="a8XyX2"
                                                     src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/doitra.png">7
                                ngày miễn phí trả hàng
                            </div>
                            <div class="LetK2C"><img class="a8XyX2"
                                                     src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/chinhhang.png">Hàng
                                chính
                                hãng 100%
                            </div>
                            <div class="LetK2C"><img class="a8XyX2"
                                                     src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/freeshipred.png">Miễn
                                phí vận
                                chuyển
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shopee-header-section__header-link">
                    <button class="shopee-button-no-outline"><a class="QRUn3m" href="/mall">
                            <div class="_3cpToV">Xem tất cả
                                <div class="_0P+BHf">
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11"
                                         x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a></button>
                </div>
            </div>
            <div class="shopee-header-section__content">
                <div class="wdSKrN pull-left">
                    <div style="width: 100%;">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner/banner4.png">
                    </div>
                </div>
                <div class="NTixlF">
                    <div class="image-carousel">
                        <div class="image-carousel__item-list-wrapper">
                            <ul class="image-carousel__item-list">
                                <?php
                                $arrSale = [
                                    ['label' => 'Tặng dây sạc 99k', 'img' => 'tai-nghe-chup-tai-gaming-Remax-RM-850-am-thanh-gia-lap-7.1-1.jpg'],
                                    ['label' => 'Tặng dây sạc 99k', 'img' => 'product1.jpg'],
                                    ['label' => 'Tặng dây sạc 99k', 'img' => 'tai-nghe-chup-tai-chong-on-ANC-Remax-RB-800HB.jpg'],
                                    ['label' => 'Tặng dây sạc 99k', 'img' => 'product1.jpg'],

                                ];
                                foreach ($arrSale as $sale):
                                    ?>
                                    <li class="image-carousel__item"
                                        style="padding: 0px; width: 25%;">
                                        <div>
                                            <div class="ofs-carousel__item" location="0"
                                                 shopid="61922582"><a
                                                        class="ofs-carousel__shop-cover-image"
                                                        href="/nivea-fmcg">
                                                    <div class="n-CE6j">
                                                        <div class="ofs-carousel__cover-image edy5hG"
                                                             style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/product/<?php echo $sale['img'] ?>); background-size: contain; background-repeat: no-repeat;"></div>
                                                    </div>
                                                </a>
                                                <div class="ofs-carousel__item__text"><?php echo $sale['label'] ?> </div>
                                            </div>
                                            <div class="ofs-carousel__item" location="1"
                                                 shopid="299282693"><a
                                                        class="ofs-carousel__shop-cover-image"
                                                        href="/pinkflash.vn">
                                                    <div class="n-CE6j">
                                                        <div class="ofs-carousel__cover-image edy5hG"
                                                             style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/product/<?php echo $sale['img'] ?>); background-size: contain; background-repeat: no-repeat;"></div>
                                                    </div>
                                                </a>
                                                <div class="ofs-carousel__item__text"><?php echo $sale['label'] ?>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--                            section  top ban chay-->
    <section class="shopee-header-section zRDhJC shopee-header-section--simple container">
        <div class="shopee-header-section__header">
            <div class="shopee-header-section__header__title"><span
                        class="OJR0Qm">Top bán chạy</span>
            </div>
            <a class="shopee-header-section__header-link" tabindex="-1"
               href="/top_products?catId=VN_BITL0_718%3Atop_sold">
                <button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg
                            enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon icon-arrow-right">
                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                    </svg>
                </button>
            </a>
        </div>
        <?php $arrTopSale = [
            ['label' => 'Tai nghe chụp tai', 'img' => 'tai-nghe-chup-tai-gaming-Remax-RM-850-am-thanh-gia-lap-7.1-1.jpg'],
            ['label' => 'Tặng dây sạc 99k', 'img' => 'product1.jpg'],
            ['label' => 'Tai nghe chụp tai', 'img' => 'tai-nghe-chup-tai-chong-on-ANC-Remax-RB-800HB.jpg'],
            ['label' => 'Tặng dây sạc 99k', 'img' => 'product1.jpg'],
            ['label' => 'Tai nghe chụp tai', 'img' => 'tai-nghe-chup-tai-chong-on-ANC-Remax-RB-800HB.jpg'],
            ['label' => 'Tặng dây sạc 99k', 'img' => 'product1.jpg'],
        ] ?>
        <div class="shopee-header-section__content">
            <div class="image-carousel">
                <div class="image-carousel__item-list-wrapper">
                    <ul class="image-carousel__item-list">
                        <?php foreach ($arrTopSale as $sale): ?>
                            <li class="image-carousel__item"
                                style="padding: 0px; width: 16.6667%;">
                                <a class="K5psIF Wh3W7J"
                                   href="/top_products?catId=VN_BITL0_976%3Atop_sold">
                                    <div class="xpdSwI">
                                        <div class="uVbGLf od+H03 li78LN"></div>
                                        <div class="n-CE6j _06bq+d">
                                            <img width="invalid-value"
                                                 height="invalid-value"
                                                 class="QQTrlS edy5hG"
                                                 style="object-fit: contain"
                                                 src="<?php echo get_stylesheet_directory_uri() ?>/img/product/<?php echo $sale['img'] ?>">
                                        </div>
                                        <div class="pDTGqb">Bán 917 / tháng</div>
                                    </div>
                                    <div class="cXODCZ"><?php echo $sale['label'] ?></div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="carousel-arrow carousel-arrow--prev carousel-arrow--hint carousel-arrow--hidden"
                     role="button" tabindex="0"
                     style="opacity: 1; visibility: hidden; transform: translateX(calc(-50% + 0px));">
                    <svg enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0"
                         class="shopee-svg-icon icon-arrow-left-bold">
                        <polygon
                                points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                    </svg>
                </div>
                <div class="carousel-arrow carousel-arrow--next carousel-arrow--hint"
                     role="button" tabindex="0"
                     style="opacity: 1; visibility: visible; transform: translateX(calc(50% - 0px));">
                    <svg enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0"
                         class="shopee-svg-icon icon-arrow-right-bold">
                        <polygon
                                points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!--    --------------------------       goi y hom nay-->

    <section class="stardust-tabs-panels__panel container">
        <div class="shopee-header-section__header">
            <div class="shopee-header-section__header__title"><span
                        class="OJR0Qm">Gợi ý hôm nay</span>
            </div>
            <a class="shopee-header-section__header-link" tabindex="-1"
               href="/top_products?catId=VN_BITL0_718%3Atop_sold">
                <button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg
                            enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon icon-arrow-right">
                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                    </svg>
                </button>
            </a>
        </div>
        <div class="_6wTCb6">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
//                'product_cat' => 'hoodies'
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
                ?>
                <div class="_4beVMw">
                    <a data-sqe="link" href="<?php echo the_permalink() ?>">
                        <div class="yZLQT4">
                            <div class="uA1waf _4QQ4Ir">
                                <?php echo woocommerce_get_product_thumbnail('full') ?>
                                <div class="X5j9y1">
                                    <div class="VGupoO wuWR8e"
                                         style="color: rgb(242, 82, 32);">
                                        <span class="_6UEPfo">Yêu thích</span>
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
                                        <div class="bVKmWS">
                                            <?php echo FREESHIP ?>
                                        </div>
                                    </div>
                                    <div class="imdVqB _2fuFWg">
                                        <div class="WSVId4 fepoRf"><span
                                                    class="j0vBz2"><?php echo number_format($product->get_price())?></span>
                                        </div>
                                        <div class="upl8wJ _82UoSS">Đã bán <?php echo get_field('quantity_sold')?></div>
                                    </div>
                                </div>
                                <div class="shopee-item-card__hover-footer _1X2yZq">
                                    Tìm sản phẩm tương tự
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </section>
    <!--video-->
    <section class="stardust-tabs-panels__panel">
        <div class="shopee-header-section__header">
            <div class="shopee-header-section__header__title"><span
                        class="OJR0Qm">VIDEO NỔI BẬT</span>
            </div>

            <a class="shopee-header-section__header-link shopee-button-no-outline" href="#">Xem tất cả&nbsp;<svg
                        enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                        class="shopee-svg-icon icon-arrow-right">
                    <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                </svg>
            </a>
        </div>
        <div class="fullwidth__row">
            <?php $arrVideo = [
                ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/xMUeG0f4GO4'],
                ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/VoiDoa4s9B4'],
                ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/xMUeG0f4GO4'],
            ];
            foreach ($arrVideo as $video):
                ?>
                <div class="fullwidth__item">
                    <iframe width="400" height="300" src="<?php echo $video['link'] ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                                picture-in-picture"
                            allowfullscreen></iframe>
                    <div class="W3bJfG">
                        <div class="qUEEG4">
                            <div class="hPc1Pf">
                                <div class="vc0PvV AxYdVM"><?php echo $video['label'] ?></div>
                            </div>
                        </div>

                    </div>
                    <div class="shopee-item-card__hover-footer _1X2yZq">
                        Xem ngay
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <!--Tin công nghệ-->
    <section>
        <div class="shopee-header-section__header">
            <div class="shopee-header-section__header__title"><span
                        class="OJR0Qm">Tin công nghệ</span>
            </div>

            <a class="shopee-header-section__header-link shopee-button-no-outline" href="#">Xem tất cả&nbsp;<svg
                        enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                        class="shopee-svg-icon icon-arrow-right">
                    <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                </svg>
            </a>
        </div>
        <div class="fullwidth__row">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'id',
                'order' => 'ASC',
            );
            $posts = get_posts($args);
            foreach ($posts as $post):
                ?>
                <div class="fullwidth__item">
                    <a href="<?php echo get_permalink($post->ID) ?>">
                        <?php echo get_the_post_thumbnail($post->ID, 'thumb', array('class' => 'full')) ?>
                        <p><?php echo $post->post_title ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php
get_footer();
