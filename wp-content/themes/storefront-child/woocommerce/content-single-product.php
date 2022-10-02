<?php
/**
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */
global $product;

$images = wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), 'full');
$product_feature = $images[0];
$gallery = $product->get_gallery_image_ids();
$quantity_sold = get_field('quantity_sold');
$regula_price = $product->get_regular_price() ? '₫' . number_format($product->get_regular_price()) : '';
//var_dump($images[0]);

?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/detail.css">
<main role="main" class="container">
    <?php woocommerce_breadcrumb(); ?>

    <div class="product-briefing flex card _2qM0Iy">
        <div></div>
        <div class="jexb7x">
            <div class="flex flex-column">
                <div class="_18BsVd">
                    <div class="_2fbO7Q">
                        <!--                        <div class="vpbtQ5" style="display: none;">-->
                        <!--                            <div class="shopee-image-placeholder _3LM2cY">-->
                        <!--                                <svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img"-->
                        <!--                                     class="stardust-icon stardust-icon-shopee icon-shopee-tiny">-->
                        <!--                                    <path stroke="none"-->
                        <!--                                          d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>-->
                        <!--                                </svg>-->
                        <!--                            </div>-->
                        <!--                            <div class="center _1fKb1T">-->
                        <!--                                <video data-dashjs-player="true" class="bS6E6i" autoplay=""-->
                        <!--                                       webkit-playsinline="webkit-playsinline"-->
                        <!--                                       src="https://cvf.shopee.vn/file/be6cc83137f5f581f6917010331a78af"></video>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="_1OPdfl">
                            <div class="_3uzKon _2PWsS4"
                                 style="background-image: url(<?php echo $product_feature ?>); background-size: contain; background-repeat: no-repeat;"></div>
                        </div>
                    </div>
                </div>
                <div class="_17WIFx attachments">
                    <?php foreach ($gallery as $i => $image_id):
                        $image_link = wp_get_attachment_url($image_id)
                        ?>
                        <div class="DTJTIT">
                            <div class="_3EV5-x">
                                <div class="_1OPdfl">
                                    <div class="_1XC0Jt _2PWsS4"
                                         style="background-image: url(<?php echo $image_link ?>); background-size: contain; background-repeat: no-repeat;"></div>
                                </div>
                                <?php echo $i == 0 ? VIDEO : '' ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <button class="shopee-icon-button _9HwEfD ynzeKh" tabindex="-1">
                        <?php echo ARROW_LEFT ?>
                    </button>
                    <button class="shopee-icon-button _9HwEfD _1P-1P1" tabindex="-1">
                        <?php echo ARROW_RIGHT ?>
                    </button>
                </div>
            </div>

        </div>
        <div class="flex flex-auto eTjGTe">
            <div class="flex-auto flex-column  _1Kkkb-" style="">
                <div class="_2rQP1z">
                    <div class="_3zG-wJ _3o22jI eBc1PL Ak8jyi _1Yuewi items-center">Yêu thích+</div>
                    <span><?php echo $product->get_title() ?></span>
                </div>
                <div class="flex _3tkSsu">
                    <div class="flex _3T9OoL">
                        <div class="_3y5XOB _14izon">4.9</div>
                        <div class="_1HyS82"><?php echo START5 ?></div>
                    </div>
                    <div class="flex _3T9OoL">
                        <div class="_3y5XOB">990</div>
                        <div class="_1HyS82">đánh giá</div>
                    </div>
                    <div class="flex _3EOMd6">
                        <div class="HmRxgn"><?php echo $quantity_sold ?></div>
                        <div class="qBnNRR">đã bán</div>
                        <div class="shopee-drawer" id="pc-drawer-id-0"
                             tabindex="0"><?php echo HELP ?></div>
                    </div>
                </div>
                <div style="margin-top: 10px;">
                    <div class="flex flex-column">
                        <div class="flex flex-column _38g6so">
                            <div class="flex items-center">
                                <div class="flex items-center _34BHKe">
                                    <div class="_2yjfFH"><?php echo $regula_price ?></div>
                                    <div class="flex items-center">
                                        <div class="_2Shl1j"> <?php echo $product->get_price() ? number_format($product->get_price()).'₫' : "Liên hệ" ?></div>
                                        <div class="_3PlIlX">41% giảm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_3rFQYx">
                    <div class="flex flex-column">
                        <div class="flex VrhRS0"><label class="_34CHXV">Bảo hành</label>
                            <div class="flex items-center">
                                <div>Bảo hành 12 tháng</div>
                                <div class="_3eazpq">Mới</div>

                            </div>
                        </div>
                        <div class="flex VrhRS0 uBD5Gu"><label class="_34CHXV">Vận chuyển</label>
                            <div class="FmL3rv _3ihqr8">
                                <div class="zikqoN">
                                    <div class="pJhgZK"><img
                                                src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/1cdd37339544d858f4d0ade5723cd477.png"
                                                width="25" height="15" class="_3VqYMj">Miễn phí
                                        vận chuyển
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex VrhRS0 _1RCFQu">
                            <div class="flex flex-column">
                                <div class="flex items-center _283ldj">
                                    <div class="_34CHXV">Số lượng</div>
                                    <div class="flex items-center">
                                        <div style="margin-right: 15px;">
                                            <div class="_1RTqoK shopee-input-quantity">
                                                <button class="_1MGNbJ"><?php echo SUBSTRACT ?></button>
                                                <input class="_1MGNbJ _1eS5m1" type="text"
                                                       role="spinbutton" aria-valuenow="1" value="1">
                                                <button class="_1MGNbJ"><?php echo PLUS ?></button>
                                            </div>
                                        </div>
                                        <div>1395 sản phẩm có sẵn</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 15px;">
<!--                    <div class="_3pcTIL">-->
<!--                        <div class="_37uIr4">-->
<!--                            <button type="button" class="btn btn-tinted btn--l _3f7_YI _1TpzVc "-->
<!--                                    aria-disabled="false">-->
<!--                                --><?php //echo CART ?>
<!--                                <span>thêm vào giỏ hàng</span></button>-->
                            <a href="?add-to-cart=<?php the_ID()?>" data-quantity="1"
                               class="button product_type_simple add_to_cart_button ajax_add_to_cart added"
                               data-product_id="<?php the_ID()?>" data-product_sku="">
                                <?php echo CART ?>Thêm vào giỏ hàng</a>
<!--                            <button type="button" class="btn btn-solid-primary btn--l _3f7_YI"-->
<!--                                    aria-disabled="false">Mua ngay-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div style="margin-top: 30px; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                    <a target="_blank" class="_2GLbiR flex items-center"
                       href="<?php echo get_permalink(REFUND) ?>"><img
                                src="<?php echo get_stylesheet_directory_uri() ?>/img/dambao.png"
                                class="_16t1rh"><span class="_1N5h1A">iCybernet Đảm Bảo</span><span>3 Ngày Trả Hàng / Hoàn Tiền</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="CKGyuW">
        <div class="page-product__content">
            <div class="page-product__content--left">
                <div class="product-detail page-product__detail">
                    <div class="_3ICPhk">
                        <div class="_2N2_VN">CHI TIẾT SẢN PHẨM</div>
                        <div class="_2jz573">
                            <div class="OktMMO">
                                <label class="_27NlLf">Thương hiệu</label><a
                                        class="_8N1GCt" href="/search?brands=1146947">Remax</a>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Loại bảo hành</label>
                                <div>Bảo hành nhà cung cấp</div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Độ dài cáp</label>
                                <div>1m</div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Hạn bảo hành</label>
                                <div>12 tháng</div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Tính năng cáp</label>
                                <div>Chống Gãy</div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Kho hàng</label>
                                <div>1395</div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Gửi từ</label>
                                <div>Hà Nội</div>
                            </div>
                        </div>
                    </div>
                    <div class="_3ICPhk">
                        <div class="_2N2_VN">MÔ TẢ SẢN PHẨM</div>
                        <div class="_2jz573">
                            <?php echo $product->get_description() ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-ratings" data-nosnippet="true">
                        <div class="product-ratings__header">ĐÁNH GIÁ SẢN PHẨM</div>
                        <div class="product-rating-overview">
                            <div class="product-rating-overview__briefing">
                                <div class="product-rating-overview__score-wrapper"><span
                                            class="product-rating-overview__rating-score">4.9</span><span
                                            class="product-rating-overview__rating-score-out-of"> trên 5 </span>
                                </div>
                                <div class="shopee-rating-stars product-rating-overview__stars">
                                    <?php echo START5 ?>
                                </div>
                            </div>
                            <div class="product-rating-overview__filters">
                                <div class="product-rating-overview__filter product-rating-overview__filter--active product-rating-overview__filter--all">
                                    tất cả
                                </div>
                                <div class="product-rating-overview__filter">5 Sao (949)</div>
                                <div class="product-rating-overview__filter">4 Sao (26)</div>
                                <div class="product-rating-overview__filter">3 Sao (6)</div>
                                <div class="product-rating-overview__filter">2 Sao (3)</div>
                                <div class="product-rating-overview__filter">1 Sao (5)</div>

                            </div>
                        </div>
                        <div class="product-ratings__list">
                            <div class="shopee-product-comment-list">
                                <div class="shopee-product-rating">
                                    <div class="shopee-product-rating__avatar">
                                        <div class="shopee-avatar">
                                            <div class="shopee-avatar__placeholder">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-headshot">
                                                    <g>
                                                        <circle cx="7.5" cy="4.5" fill="none" r="3.8"
                                                                stroke-miterlimit="10"></circle>
                                                        <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6"
                                                              fill="none" stroke-linecap="round"
                                                              stroke-miterlimit="10"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <img class="shopee-avatar__img"
                                                 src="https://cf.shopee.vn/file/5e6ee4cb4fa63972e08ad2b60ba7c82f_tn">
                                        </div>
                                    </div>
                                    <div class="shopee-product-rating__main">
                                        <div class="shopee-product-rating__author-name">
                                            h*****h
                                        </div>
                                        <?php echo START5 ?>
                                        <div class="shopee-product-rating__time">2021-12-08 21:25</div>
                                        <div class="_280jKz">Shop rất nhiệt tình giao hàng rất
                                            đẹp rất chắc chắn nhé mọi người nên mua nhé quá tốt
                                            luôn á, sẽ ủng hộ shop n lần nữa ạ
                                        </div>
                                        <div class="shopee-product-rating__tags">
                                            <div class="shopee-product-rating__tag">Chất lượng
                                                sản phẩm tuyệt vời
                                            </div>
                                            <div class="shopee-product-rating__tag">Đóng gói sản
                                                phẩm rất đẹp và chắc chắn
                                            </div>
                                            <div class="shopee-product-rating__tag">Shop phục vụ
                                                rất tốt
                                            </div>
                                            <div class="shopee-product-rating__tag">Rất đáng
                                                tiền
                                            </div>
                                            <div class="shopee-product-rating__tag">Thời gian
                                                giao hàng rất nhanh
                                            </div>
                                        </div>
                                        <div class="shopee-product-rating__image-list-wrapper comment-image">
                                            <div class="rating-media-list">
                                                <div class="rating-media-list__container ">
                                                    <div class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                        <div class="shopee-rating-media-list-image__wrapper">
                                                            <div class="shopee-rating-media-list-image__content"
                                                                 style="background-image: url(&quot;https://play-aka.vod.shopee.com/c3/98934353/103/AmM1AzQAdPsocfUhbwEF9NdH.jpg&quot;);">
                                                                <!--                                                                <div class="shopee-rating-media-list-image__content--blur"></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="rating-media-list__video-cover">
                                                            <?php echo VIDEO_RECORDER ?>
                                                            <span>0:21</span>
                                                        </div>
                                                    </div>

                                                    <img src="https://cf.shopee.vn/file/8cc8b3c72956691abeb88203c4de5204">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_3lF5CE">
                                            <div class="_1rc11Y">phản hồi của Người Bán</div>
                                            <div class="_2w33Zs">Cảm ơn Anh/Chị đã tin tưởng!</div>
                                        </div>
                                        <div class="shopee-product-rating__actions">
                                            <div style="display: flex;">
                                                <div class="shopee-product-rating__like-button">
                                                    <?php echo LIKE ?>
                                                </div>
                                                <div class="shopee-product-rating__like-count">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopee-page-controller product-ratings__page-controller hidden">
                                <button class="shopee-icon-button shopee-icon-button--left ">
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                                         y="0" class="shopee-svg-icon icon-arrow-left">
                                        <g>
                                            <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button class="shopee-button-solid shopee-button-solid--primary">
                                    1
                                </button>
                                <button class="shopee-button-no-outline">2</button>
                                <button class="shopee-button-no-outline">3</button>
                                <button class="shopee-button-no-outline">4</button>
                                <button class="shopee-button-no-outline">5</button>
                                <button class="shopee-button-no-outline shopee-button-no-outline--non-click">
                                    ...
                                </button>
                                <button class="shopee-icon-button shopee-icon-button--right ">
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                                         y="0" class="shopee-svg-icon icon-arrow-right">
                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

