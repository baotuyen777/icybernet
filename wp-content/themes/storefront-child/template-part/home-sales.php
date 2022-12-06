<?php
$saleBanner = get_field('banner_sale') ?? get_stylesheet_directory_uri() . '/img/banner/banner4.png';

?>
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
        <div class="banner_sale">
            <img src="<?php echo $saleBanner ?>">
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