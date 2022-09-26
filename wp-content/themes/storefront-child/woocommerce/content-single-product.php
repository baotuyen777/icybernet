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
//var_dump($images[0]);

?>
<link rel="stylesheet" data-modern="true"
      href="<?php echo get_stylesheet_directory_uri() ?>/css/bundle.c58d9ed1d023c47b.css">
<link rel="stylesheet"
      href="<?php echo get_stylesheet_directory_uri() ?>/css/pcmall-productdetailspage.9f3f48ed859c6a8a05bd.legacy.css">
<link rel="stylesheet" type="text/css"
      href="<?php echo get_stylesheet_directory_uri() ?>/css/PageProductBelowTheFold.ff93f7e24e481b8e4ec8.legacy.css">
<link rel="stylesheet" type="text/css"
      href="<?php echo get_stylesheet_directory_uri() ?>/css/4983.cff4e31746a2710f082b.legacy.css">
<main role="main" class="container">
    <?php woocommerce_breadcrumb(); ?>

    <div class="product-briefing flex card _2qM0Iy">
        <div></div>
        <div class="jexb7x">
            <div class="flex flex-column">
                <div class="_18BsVd">
                    <div class="_2fbO7Q">
                        <div class="vpbtQ5" style="display: none;">
                            <div class="shopee-image-placeholder _3LM2cY">
                                <svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img"
                                     class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                    <path stroke="none"
                                          d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                </svg>
                            </div>
                            <div class="center _1fKb1T">
                                <video data-dashjs-player="true" class="bS6E6i" autoplay=""
                                       webkit-playsinline="webkit-playsinline"
                                       src="https://cvf.shopee.vn/file/be6cc83137f5f581f6917010331a78af"></video>
                            </div>
                        </div>
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
                                <?php if ($i == 0): ?>
                                    <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                         class="shopee-svg-icon _2L2oCb">
                                        <g opacity=".54">
                                            <g>
                                                <circle cx="7.5" cy="7.5" fill="#040000" r="7.3"></circle>
                                                <path d="m7.5.5c3.9 0 7 3.1 7 7s-3.1 7-7 7-7-3.1-7-7 3.1-7 7-7m0-.5c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5 7.5-3.4 7.5-7.5-3.4-7.5-7.5-7.5z"
                                                      fill="#ffffff"></path>
                                            </g>
                                        </g>
                                        <path d="m6.1 5.1c0-.2.1-.3.3-.2l3.3 2.3c.2.1.2.3 0 .4l-3.3 2.4c-.2.1-.3.1-.3-.2z"
                                              fill="#ffffff"></path>
                                    </svg>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <button class="shopee-icon-button _9HwEfD ynzeKh" tabindex="-1">
                        <svg enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0"
                             class="shopee-svg-icon icon-arrow-left-bold">
                            <polygon
                                    points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                        </svg>
                    </button>
                    <button class="shopee-icon-button _9HwEfD _1P-1P1" tabindex="-1">
                        <svg enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0"
                             class="shopee-svg-icon icon-arrow-right-bold">
                            <polygon points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="" style="margin-top: 15px;">
                <div class="">
                    <button class="_11Toj4" tabindex="0">
                        <svg width="24" height="20" class="_2lkS14">
                            <path d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z"
                                  stroke="#FF424F" stroke-width="1.5" fill="none" fill-rule="evenodd"
                                  stroke-linejoin="round"></path>
                        </svg>
                        <div class="_1ipVhx">Đã thích (9,9k)</div>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-auto eTjGTe">
            <div class="flex-auto flex-column  _1Kkkb-" style="">
                <div class="_2rQP1z">
                    <div class="_3zG-wJ _3o22jI eBc1PL Ak8jyi _1Yuewi items-center">Yêu thích+
                    </div>
                    <span><?php echo $product->get_title() ?></span>
                </div>
                <div class="flex _3tkSsu">
                    <div class="flex _3T9OoL">
                        <div class="_3y5XOB _14izon">4.9</div>
                        <div class="_1HyS82">
                            <div class="shopee-rating-stars">
                                <div class="shopee-rating-stars__stars">
                                    <div class="shopee-rating-stars__star-wrapper">
                                        <div class="shopee-rating-stars__lit" style="width: 100%;">
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                             class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                            <polygon fill="none"
                                                     points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"></polygon>
                                        </svg>
                                    </div>
                                    <div class="shopee-rating-stars__star-wrapper">
                                        <div class="shopee-rating-stars__lit" style="width: 100%;">
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                             y="0"
                                             class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                            <polygon fill="none"
                                                     points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"></polygon>
                                        </svg>
                                    </div>
                                    <div class="shopee-rating-stars__star-wrapper">
                                        <div class="shopee-rating-stars__lit" style="width: 100%;">
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                             y="0"
                                             class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                            <polygon fill="none"
                                                     points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"></polygon>
                                        </svg>
                                    </div>
                                    <div class="shopee-rating-stars__star-wrapper">
                                        <div class="shopee-rating-stars__lit" style="width: 100%;">
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                             y="0"
                                             class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                            <polygon fill="none"
                                                     points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"></polygon>
                                        </svg>
                                    </div>
                                    <div class="shopee-rating-stars__star-wrapper">
                                        <div class="shopee-rating-stars__lit" style="width: 93.2323%;">
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                             class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                            <polygon fill="none"
                                                     points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"></polygon>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex _3T9OoL">
                        <div class="_3y5XOB">990</div>
                        <div class="_1HyS82">đánh giá</div>
                    </div>
                    <div class="flex _3EOMd6">
                        <div class="HmRxgn">3,1k</div>
                        <div class="qBnNRR">đã bán</div>
                        <div class="shopee-drawer" id="pc-drawer-id-0" tabindex="0">
                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img"
                                 class="stardust-icon stardust-icon-help QiuHaS">
                                <circle cx="7.5" cy="7.5" fill="none" r="6.5"
                                        stroke-miterlimit="10"></circle>
                                <path stroke="none"
                                      d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 10px;">
                    <div class="flex flex-column">
                        <div class="flex flex-column _38g6so">
                            <div class="flex items-center">
                                <div class="flex items-center _34BHKe">
                                    <div class="_2yjfFH">₫150.000</div>
                                    <div class="flex items-center">
                                        <div class="_2Shl1j">₫<?php echo $product->get_price(); ?></div>
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
                                                <button class="_1MGNbJ">
                                                    <svg enable-background="new 0 0 10 10"
                                                         viewBox="0 0 10 10" x="0" y="0"
                                                         class="shopee-svg-icon">
                                                        <polygon
                                                                points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon>
                                                    </svg>
                                                </button>
                                                <input class="_1MGNbJ _1eS5m1" type="text"
                                                       role="spinbutton" aria-valuenow="1" value="1">
                                                <button class="_1MGNbJ">
                                                    <svg enable-background="new 0 0 10 10"
                                                         viewBox="0 0 10 10" x="0" y="0"
                                                         class="shopee-svg-icon icon-plus-sign">
                                                        <polygon
                                                                points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                                                    </svg>
                                                </button>
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
                    <div class="_3pcTIL">
                        <div class="_37uIr4">
                            <button type="button" class="btn btn-tinted btn--l _3f7_YI _1TpzVc "
                                    aria-disabled="false">
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                     class="shopee-svg-icon _1FtIAE icon-add-to-cart">
                                    <g>
                                        <g>
                                            <polyline fill="none"
                                                      points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10"></polyline>
                                            <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                            <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                        </g>
                                        <line fill="none" stroke-linecap="round" stroke-miterlimit="10"
                                              x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                        <line fill="none" stroke-linecap="round" stroke-miterlimit="10"
                                              x1="9" x2="9" y1="8.5" y2="5.5"></line>
                                    </g>
                                </svg>
                                <span>thêm vào giỏ hàng</span></button>
                            <button type="button" class="btn btn-solid-primary btn--l _3f7_YI"
                                    aria-disabled="false">Mua ngay
                            </button>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 30px; border-top: 1px solid rgba(0, 0, 0, 0.05);"><a
                            target="_blank" rel="noopener noreferrer" class="_2GLbiR flex items-center"
                            href="https://shopee.vn/m/shopee-dam-bao"><img
                                src="<?php echo get_stylesheet_directory_uri() ?>/img/dambao.png"
                                class="_16t1rh"><span class="_1N5h1A">iCybernet Đảm Bảo</span><span>3 Ngày Trả Hàng / Hoàn Tiền</span></a>
                </div>
            </div>
        </div>
    </div>
    <div style="display: contents;"></div>
    <div class="CKGyuW">
        <div class="page-product__content">
            <div class="page-product__content--left">
                <div class="product-detail page-product__detail">
                    <div class="_3ICPhk">
                        <div class="_2N2_VN">CHI TIẾT SẢN PHẨM</div>
                        <div class="_2jz573">
                            <div class="OktMMO"><label class="_27NlLf">Danh Mục</label>
                                <div class="flex items-center _3AZ0Vk"><a class="CyVtI7 _2yC5g9"
                                                                          href="/">iCybernet</a>
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                                         y="0" class="shopee-svg-icon _2ON4et icon-arrow-right">
                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                    </svg>
                                    <a class="CyVtI7 _2yC5g9" href="/Điện-Thoại-Phụ-Kiện-cat.11036030">Điện
                                        Thoại &amp;
                                        Phụ Kiện</a>
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                                         y="0" class="shopee-svg-icon _2ON4et icon-arrow-right">
                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                    </svg>
                                    <a class="CyVtI7 _2yC5g9"
                                       href="/Pin-Gắn-Trong-Cáp-và-Bộ-Sạc-cat.11036030.11036054">Pin
                                        Gắn Trong, Cáp và Bộ Sạc</a>
                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0"
                                         y="0" class="shopee-svg-icon _2ON4et icon-arrow-right">
                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                    </svg>
                                    <a class="CyVtI7 _2yC5g9"
                                       href="/Cáp-Sạc-và-đầu-chuyển-đổi-cat.11036030.11036054.11036056">Cáp
                                        Sạc và đầu chuyển đổi</a></div>
                            </div>
                            <div class="OktMMO"><label class="_27NlLf">Thương hiệu</label><a
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
                                    <div class="shopee-rating-stars__stars">
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                         points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                         points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                         points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                         points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit"
                                                 style="width: 93.2323%;">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                 x="0" y="0"
                                                 class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                         points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                    </div>
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
                                <div class="product-rating-overview__filter product-rating-overview__filter--with-comment">
                                    Có Bình luận (407)
                                </div>
                                <div class="product-rating-overview__filter product-rating-overview__filter--with-photo">
                                    Có hình ảnh / video (356)
                                </div>
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
                                        <div class="repeat-purchase-con">
                                            <div class="shopee-product-rating__rating">
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-rating-solid--active icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-rating-solid--active icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-rating-solid--active icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-rating-solid--active icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                                <svg enable-background="new 0 0 15 15"
                                                     viewBox="0 0 15 15" x="0" y="0"
                                                     class="shopee-svg-icon icon-rating-solid--active icon-rating-solid">
                                                    <polygon
                                                            points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="shopee-product-rating__time">2021-12-08
                                            21:25
                                        </div>
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
                                        <div class="shopee-product-rating__image-list-wrapper">
                                            <div class="rating-media-list">
                                                <div class="rating-media-list__container">
                                                    <div class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                        <div class="shopee-rating-media-list-image__wrapper">
                                                            <div class="shopee-rating-media-list-image__place-holder">
                                                                <svg enable-background="new 0 0 15 15"
                                                                     viewBox="0 0 15 15" x="0" y="0"
                                                                     class="shopee-svg-icon icon-loading-image">
                                                                    <g>
                                                                        <rect fill="none" height="8"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              width="10" x="1"
                                                                              y="4.5"></rect>
                                                                        <line fill="none"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              x1="1" x2="11" y1="6.5"
                                                                              y2="6.5"></line>
                                                                        <rect fill="none" height="3"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              width="3" x="11"
                                                                              y="6.5"></rect>
                                                                        <line fill="none"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              x1="1" x2="11" y1="14.5"
                                                                              y2="14.5"></line>
                                                                        <line fill="none"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              x1="6" x2="6" y1=".5"
                                                                              y2="3"></line>
                                                                        <line fill="none"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              x1="3.5" x2="3.5" y1="1"
                                                                              y2="3"></line>
                                                                        <line fill="none"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-miterlimit="10"
                                                                              x1="8.5" x2="8.5" y1="1"
                                                                              y2="3"></line>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="shopee-rating-media-list-image__content"
                                                                 style="background-image: url(&quot;https://play-aka.vod.shopee.com/c3/98934353/103/AmM1AzQAdPsocfUhbwEF9NdH.jpg&quot;);">
                                                                <div class="shopee-rating-media-list-image__content--blur"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rating-media-list__video-cover">
                                                            <svg width="23" height="18"
                                                                 viewBox="0 0 23 18" fill="none">
                                                                <g filter="url(#filter0_d)">
                                                                    <path fill-rule="evenodd"
                                                                          clip-rule="evenodd"
                                                                          d="M5 4C4.44772 4 4 4.44772 4 5V13C4 13.5523 4.44772 14 5 14H13C13.5523 14 14 13.5523 14 13V5C14 4.44772 13.5523 4 13 4H5ZM11.5 9C11.5 10.3807 10.3807 11.5 9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9ZM9 10.6667C9.92047 10.6667 10.6667 9.92047 10.6667 9C10.6667 8.07952 9.92047 7.33333 9 7.33333C8.07953 7.33333 7.33333 8.07952 7.33333 9C7.33333 9.92047 8.07953 10.6667 9 10.6667ZM18.1667 4.83333L14.8333 7.33306V10.6667L18.1667 13.1667V4.83333Z"
                                                                          fill="white"></path>
                                                                </g>
                                                                <defs>
                                                                    <filter id="filter0_d" x="0" y="0"
                                                                            width="22.1667" height="18"
                                                                            filterUnits="userSpaceOnUse"
                                                                            color-interpolation-filters="sRGB">
                                                                        <feFlood flood-opacity="0"
                                                                                 result="BackgroundImageFix"></feFlood>
                                                                        <feColorMatrix in="SourceAlpha"
                                                                                       type="matrix"
                                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                                        <feOffset></feOffset>
                                                                        <feGaussianBlur
                                                                                stdDeviation="2"></feGaussianBlur>
                                                                        <feColorMatrix type="matrix"
                                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.26 0"></feColorMatrix>
                                                                        <feBlend mode="normal"
                                                                                 in2="BackgroundImageFix"
                                                                                 result="effect1_dropShadow"></feBlend>
                                                                        <feBlend mode="normal"
                                                                                 in="SourceGraphic"
                                                                                 in2="effect1_dropShadow"
                                                                                 result="shape"></feBlend>
                                                                    </filter>
                                                                </defs>
                                                            </svg>
                                                            <span>0:21</span></div>
                                                    </div>


                                                </div>
                                                <div class="rating-media-list__zoomed-image">
                                                    <div class="rating-media-list-image-carousel"
                                                         style="transition: all 0ms ease 0s; width: 0px;">
                                                        <div class="rating-media-list-image-carousel__item-list-wrapper">
                                                            <ul class="rating-media-list-image-carousel__item-list"
                                                                style="margin-left: 0px; margin-top: 0px;">
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <div class="_3-l3jE">
                                                                        <video src="https://play-aka.vod.shopee.com/c3/98934353/103/AmM1MyQA=PC9afYhbQEHJN1H.mp4"
                                                                               controls=""
                                                                               class="_3H7td- rating-media-list__zoomed-video-item"
                                                                               controlslist="nodownload"></video>
                                                                    </div>
                                                                </li>
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <img class="rating-media-list__zoomed-image-item"
                                                                         src="https://cf.shopee.vn/file/8cc8b3c72956691abeb88203c4de5204">
                                                                </li>
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <img class="rating-media-list__zoomed-image-item"
                                                                         src="https://cf.shopee.vn/file/64ed0181abb445c9a36f308596e0a840">
                                                                </li>
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <img class="rating-media-list__zoomed-image-item"
                                                                         src="https://cf.shopee.vn/file/287cac58a65a10ae75c9a1a5182302e9">
                                                                </li>
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <img class="rating-media-list__zoomed-image-item"
                                                                         src="https://cf.shopee.vn/file/435d34ebd1e30b56a5b2330624dbebc4">
                                                                </li>
                                                                <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                                    style="padding: 0px 0.625rem;">
                                                                    <img class="rating-media-list__zoomed-image-item"
                                                                         src="https://cf.shopee.vn/file/6b050a5b549c2284df0bcef74a57a290">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="rating-media-list-carousel-arrow rating-media-list-carousel-arrow--prev rating-media-list-carousel-arrow--hint rating-media-list-carousel-arrow--hidden"
                                                             role="button" tabindex="0"
                                                             style="opacity: 1; visibility: hidden; transform: translateX(calc(-50% + 0px));">
                                                            <svg enable-background="new 0 0 13 20"
                                                                 viewBox="0 0 13 20" x="0" y="0"
                                                                 class="shopee-svg-icon icon-arrow-left-bold">
                                                                <polygon
                                                                        points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="rating-media-list-carousel-arrow rating-media-list-carousel-arrow--next rating-media-list-carousel-arrow--hint"
                                                             role="button" tabindex="0"
                                                             style="opacity: 1; visibility: visible; transform: translateX(calc(50% - 0px));">
                                                            <svg enable-background="new 0 0 13 21"
                                                                 viewBox="0 0 13 21" x="0" y="0"
                                                                 class="shopee-svg-icon icon-arrow-right-bold">
                                                                <polygon
                                                                        points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_3lF5CE">
                                            <div class="_1rc11Y">phản hồi của Người Bán</div>
                                            <div class="_2w33Zs">Cảm ơn Anh/Chị đã tin tưởng và
                                                ủng hộ Shop. Để có thể phục vụ Anh/Chị tốt hơn
                                                trong các lần mua hàng sau. Shop xin gửi mình mã
                                                giảm giá 5% cho các Khách Hàng thân thiết,
                                                Anh/Chị vui lòng check inbox nha!
                                            </div>
                                        </div>
                                        <div class="shopee-product-rating__actions"
                                             style="justify-content: space-between;">
                                            <div style="display: flex;">
                                                <div class="shopee-product-rating__like-button">
                                                    <svg width="14px" height="13px" viewBox="0 0 14 13"
                                                         version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <defs></defs>
                                                        <g stroke="none" stroke-width="1"
                                                           fill-rule="evenodd">
                                                            <g id="Product-Ratings-Working"
                                                               transform="translate(-245.000000, -855.000000)"
                                                               fill-rule="nonzero">
                                                                <g transform="translate(155.000000, 92.000000)">
                                                                    <g transform="translate(40.000000, 184.000000)">
                                                                        <g transform="translate(0.000000, 326.000000)">
                                                                            <g transform="translate(50.000000, 253.000000)">
                                                                                <g>
                                                                                    <path d="M0,12.7272727 L2.54545455,12.7272727 L2.54545455,5.09090909 L0,5.09090909 L0,12.7272727 Z M14,5.72727273 C14,5.02727273 13.4272727,4.45454545 12.7272727,4.45454545 L8.71818182,4.45454545 L9.35454545,1.52727273 L9.35454545,1.33636364 C9.35454545,1.08181818 9.22727273,0.827272727 9.1,0.636363636 L8.4,0 L4.2,4.2 C3.94545455,4.39090909 3.81818182,4.70909091 3.81818182,5.09090909 L3.81818182,11.4545455 C3.81818182,12.1545455 4.39090909,12.7272727 5.09090909,12.7272727 L10.8181818,12.7272727 C11.3272727,12.7272727 11.7727273,12.4090909 11.9636364,11.9636364 L13.8727273,7.44545455 C13.9363636,7.31818182 13.9363636,7.12727273 13.9363636,7 L13.9363636,5.72727273 L14,5.72727273 C14,5.79090909 14,5.72727273 14,5.72727273 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="shopee-product-rating__like-count">
                                                    1
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <div class="shopee-product-rating__report-menu-button">
                                                    <div class="stardust-dropdown">
                                                        <div class="stardust-dropdown__item-header">
                                                            <div>
                                                                <svg width="4px" height="16px"
                                                                     viewBox="0 0 4 16" version="1.1"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <defs></defs>
                                                                    <g stroke="none" stroke-width="1"
                                                                       fill-rule="evenodd">
                                                                        <g transform="translate(-1301.000000, -550.000000)"
                                                                           fill="#CCCCCC">
                                                                            <g transform="translate(155.000000, 92.000000)">
                                                                                <g transform="translate(40.000000, 184.000000)">
                                                                                    <g transform="translate(0.000000, 161.000000)">
                                                                                        <g>
                                                                                            <g transform="translate(50.000000, 2.000000)">
                                                                                                <path d="M1058,122.2 C1056.895,122.2 1056,123.096 1056,124.2 C1056,125.306 1056.895,126.202 1058,126.202 C1059.104,126.202 1060,125.306 1060,124.2 C1060,123.096 1059.104,122.2 1058,122.2 M1058,116.6 C1056.895,116.6 1056,117.496 1056,118.6 C1056,119.706 1056.895,120.602 1058,120.602 C1059.104,120.602 1060,119.706 1060,118.6 C1060,117.496 1059.104,116.6 1058,116.6 M1058,111 C1056.895,111 1056,111.896 1056,113 C1056,114.106 1056.895,115.002 1058,115.002 C1059.104,115.002 1060,114.106 1060,113 C1060,111.896 1059.104,111 1058,111"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="stardust-dropdown__item-body">
                                                            <div class="shopee-product-rating__report-menu-dropdown">
                                                                báo cáo
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shopee-page-controller product-ratings__page-controller">
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

