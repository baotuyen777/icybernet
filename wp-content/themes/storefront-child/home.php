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
                            <li style="width:800px; height: 300px">
                                <img src="<?php echo $slide['full_image_url'] ?>"
                                     srcset="<?php echo $slide['large_srcset'] ?>"></li>
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
            <?php get_template_part('template-part/home', 'flash'); ?>
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
                    <a class="shopee-header-section__header-link" href="<?php echo wc_get_page_permalink('shop') ?>">
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
                        $featured_posts = get_field('top_sale');
                        if ($featured_posts):
                            foreach ($featured_posts as $post):
                                setup_postdata($post);
                                ?>
                                <li class="col-3">
                                    <a target="_blank"
                                       href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <div class="title_2line"><?php the_title() ?> </div>
                                    </a>
                                </li>
                            <?php endforeach;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

        <!--                            section  top ban chay-->
        <section class="container">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title"><span
                            class="OJR0Qm">Top bán chạy</span>
                </div>
                <a class="shopee-header-section__header-link " href="<?php echo wc_get_page_permalink('shop') ?>">Xem
                    tất cả&nbsp;<span
                            class="bg_icon_round"><?php echo ARROW_GO ?></span>
                </a>
            </div>


            <ul class="flex">
                <?php
                $featured_posts = get_field('top_hot');
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
                                    <div class="pDTGqb">Đã bán <?php the_field('quantity_sold'); ?></div>
                                </div>
                                <div class="text-center title_2line"><?php the_title() ?></div>
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
                   href="<?php echo wc_get_page_permalink('shop') ?>">
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

                <a class="shopee-header-section__header-link shopee-button-no-outline"
                   href="<?php echo wc_get_page_permalink('shop') ?>">Xem tất cả&nbsp;<svg
                            enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon icon-arrow-right">
                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                    </svg>
                </a>
            </div>
            <div class="flex">
                <?php
                $args = array(
                    'post_type' => 'video',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'posts_per_page' => 4,
                );
                $posts = get_posts($args);
                foreach ($posts as $post):
                    setup_postdata($post);
                    ?>
                    <div class="col-3 ">
                        <div class="whitebox">
                            <a href="<?php the_permalink(); ?>"
                               target="_blank"><?php the_post_thumbnail('thumbnail'); ?></a>
                            <div class="padding10"><?php the_title() ?></div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>

            </div>
        </section>

        <!--Tin công nghệ-->
        <section class="container block_tech">
            <div class="shopee-header-section__header">
                <div class="shopee-header-section__header__title">Tin công nghệ</div>
                <a class="shopee-header-section__header-link shopee-button-no-outline"
                   href="<?php echo get_category_link(TERM_NEWS) ?>">Xem tất cả&nbsp;<svg
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
