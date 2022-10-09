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
                <div id="home_slider" class="slider">
                    <a href="#" class="control_next">></a>
                    <a href="#" class="control_prev"><</a>
                    <ul>
                        <?php
                        $mainSlider = get_field('banner_top');
                        foreach ($mainSlider as $slide):
                            ?>
                            <li style="width:800px; height: 235px">
                                <img src="<?php echo $slide['full_image_url'] ?>" srcset="<?php echo $slide['large_srcset'] ?>"></li>
                        <?php endforeach; ?>
                    </ul>
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

        <section class="xZ4bbg container" id="cate1">
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'group',
                'hide_empty' => false,
            ));
            foreach ($terms as $term):
                ?>
                <a href="<?php echo get_term_link($term->term_id) ?>">
                    <div class="KYggX9">
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
                <ul class="flex">
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
                        <li class="col-1 no_padding">
                            <div class="home-category-list__group">
                                <a class="home-category-list__category-grid"
                                   href="<?php echo get_term_link($term->term_id) ?>">
                                    <div class="_1l+Pw-">
                                        <div class="H8mXLe">
                                            <img src="<?php echo $image ?>"/>
                                        </div>
                                        <div class="cZdsLQ">
                                            <?php echo $term->name ?>
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
                            ?>
                            <li class="col-2">
                                <div class="fR2ZHc KgcLFb">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="relative">
                                            <?php if ($product->is_on_sale()): ?>
                                                <div class="VeRrqr">
                                                    <div class="_5ICO3M yV54ZD X7gzZ7 shopee-badge">
                                                        <div class="_8PundJ"><span
                                                                    class="percent">24%</span><span
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
            </div>
        </section>
        <section class="homepage-mall-section container white">
            <div class="shopee-header-section shopee-header-section--simple">
                <div class="shopee-header-section__header">
                    <div class="shopee-header-section__header__title">
                        <div class="_9FdTU0"><a class="ecCXWo usxt6W" href="#">Siêu khuyến mại</a>
                            <div class="_5Ru4Na pc">
                                <div class="LetK2C"><img class="a8XyX2"
                                                         src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/doitra.png">7
                                    ngày miễn phí trả hàng
                                </div>
                                <div class="LetK2C"><img class="a8XyX2"
                                                         src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/chinhhang.png">Hàng
                                    chính hãng 100%
                                </div>
                                <div class="LetK2C"><img class="a8XyX2"
                                                         src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/freeshipred.png">Miễn
                                    phí vận chuyển
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="shopee-header-section__header-link" href="#">
                        Xem tất cả
                        <span class="bg_icon_round"><?php echo ARROW_GO ?></span>
                    </a>
                </div>
                <div class="shopee-header-section__content">
                    <div class="pull-left pc">
                        <div style="width: 100%;">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner/banner4.png">
                        </div>
                    </div>
                    <ul class="flex">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 8,
                            'cat' => TERM_PROMOTION
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            ?>
                            <li class="col-3">
                                <a target="_blank"
                                   href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="product_name"><?php the_title() ?> </div>
                                </a>
                            </li>
                            <li class="col-3">
                                <a target="_blank"
                                   href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="product_name"><?php the_title() ?> </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_query(); ?>

                    </ul>

                </div>
            </div>
        </section>

        <!--                            section  top ban chay-->
        <section class="container">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title"><span
                            class="OJR0Qm">Top bán chạy</span>
                </div>
                <a class="shopee-header-section__header-link " href="#top_sold2">Xem tất cả&nbsp;<span
                            class="bg_icon_round"><?php echo ARROW_GO ?></span>
                </a>
            </div>


            <ul class="flex">
                <?php
                $featured_posts = get_field('top_sale');
                if ($featured_posts):
                    foreach ($featured_posts as $post):
                        setup_postdata($post);
                        ?>
                        <li class="white col-2 p-b-30">
                            <a href="<?php the_permalink(); ?>">
                                <div class="relative">
                                    <div class="product_label"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/img/product_label_top.png"/>
                                    </div>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="pDTGqb">Bán <?php the_field('quantity_sold_in_month'); ?> / tháng</div>
                                </div>
                                <div class="cXODCZ"><?php the_title() ?></div>
                            </a>
                        </li>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </section>
        <!--    --------------------------       goi y hom nay-->

        <section class="stardust-tabs-panels__panel container">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title"><span
                            class="OJR0Qm">Gợi ý hôm nay</span>
                </div>
                <a class="shopee-header-section__header-link" tabindex="-1"
                   href="#top_sold">
                    Xem tất cả&nbsp;<svg
                            enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon icon-arrow-right">
                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                    </svg>
                </a>
            </div>
            <div class="flex">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="col-2">
                        <?php get_template_part('template-part/product', 'item', get_post_format()); ?>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </section>
        <!--video-->
        <section class="stardust-tabs-panels__panel container">
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
            <div class="flex">
                <?php $arrVideo = [
                    ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/xMUeG0f4GO4'],
                    ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/VoiDoa4s9B4'],
                    ['label' => 'Đánh giá sạc nhanh remax', 'link' => 'https://www.youtube.com/embed/xMUeG0f4GO4'],
                ];
                foreach ($arrVideo as $video):
                    ?>
                    <div class="col-4 ">
                        <div class="whitebox">
                            <iframe width="100%" max-height="300" src="<?php echo $video['link'] ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                                picture-in-picture"
                                    allowfullscreen></iframe>
                            <div><?php echo $video['label'] ?></div>
                        </div>


                    </div>
                <?php endforeach; ?>

            </div>
        </section>

        <!--Tin công nghệ-->
        <section class="container block_tech">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title">Tin công nghệ</div>
                <a class="shopee-header-section__header-link shopee-button-no-outline" href="#">Xem tất cả&nbsp;<svg
                            enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon icon-arrow-right">
                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                    </svg>
                </a>
            </div>
            <div class="flex">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'posts_per_page' => 4,
                    'cat' => TERM_NEWS
                );
                $posts = get_posts($args);
                foreach ($posts as $post):
                    ?>
                    <div class="col-3">
                        <a href="<?php echo get_permalink($post->ID) ?>" class="whitebox">
                            <?php echo get_the_post_thumbnail($post->ID, 'thumb', array('class' => 'full')) ?>
                            <p><?php echo $post->post_title ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
<?php
get_footer();
