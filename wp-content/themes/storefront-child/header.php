<html dir="ltr" lang="vi">
<head>
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=1240,shrink-to-fit=no">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCybernet | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website</title>
    <meta name="theme-color" content="#f53d2d" data-rh="true">
    <meta property="og:title" content="iCybernet | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website" data-rh="true">
    <link rel="icon" type="image/x-icon" href="<?php echo site_url()?>/favicon.ico">
    <link rel="canonical" href="https://icybernet.vn/" data-rh="true">
    <meta name="robots" content="all" data-rh="true">
    <meta property="og:type" content="website" data-rh="true">
    <meta property="og:url" content="https://icybernet.vn" data-rh="true">

    <meta name="description"
          content="Mua sắm trực tuyến hàng triệu sản phẩm ...Giá tốt &amp; nhiều ưu đãi. Mua và bán online trong 30 giây. iCybernet đảm bảo nhận hàng hoặc hoàn tiền. iCybernet Đảm Bảo | Miễn Phí Vận Chuyển | Gợi Ý Hôm Nay"
          data-rh="true">
    <meta property="og:description"
          content="Mua sắm trực tuyến hàng triệu sản phẩm ở...Giá tốt &amp; nhiều ưu đãi. Mua và bán online trong 30 giây. iCybernet đảm bảo nhận hàng hoặc hoàn tiền. iCybernet Đảm Bảo | Miễn Phí Vận Chuyển | Gợi Ý Hôm Nay"
          data-rh="true">
		  <meta property="og:image" content="https://icybernet.open3s.esy.es/wp-content/themes/storefront-child/img/logo2.png" />
    <?php wp_head(); ?>
<!--    <link rel="stylesheet" href="--><?php //echo get_stylesheet_directory_uri() ?><!--/css/theme.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo get_stylesheet_directory_uri() ?><!--/css/main.css">-->
</head>
<body <?php body_class(); ?>>

<?php do_action('storefront_before_site'); ?>

<header class="shopee-top shopee-top--sticky">
    <div class="navbar-wrapper container-wrapper">
        <nav class="container navbar">
<!--            <div class="flex v-center FAQGyh">-->
<!--                <div class="">-->
<!--                    <a class="_2TLLZP" href="--><?php //echo get_home_url()?><!--">Tải ứng dụng</a></div>-->
<!--                <div class="flex _2TLLZP ZUq1cc HniJJe">Kết nối</div>-->
<!--                <div class="flex _2TLLZP FK3705"><a-->
<!--                            class="D7dyDc header-navbar-background header-navbar-facebook-png"-->
<!--                            href="https://facebook.com/icybernet" target="_blank" rel="noopener noreferrer"-->
<!--                            title="Kết nối Facebook"></a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="navbar__spacer"></div>-->
            <ul class="navbar__links">
                <li class="navbar__link navbar__link--tappable navbar__link--hoverable navbar__link--account">
                    <div class="stardust-popover" id="stardust-popover1" tabindex="0">
                        <div role="button" class="stardust-popover__target">
                            <a href="<?php echo home_url( '/ilogin' )?>" class="navbar__link--account__container">
                                <div class="shopee-avatar">
                                    <img class="shopee-avatar__img"
                                         src="<?php echo get_stylesheet_directory_uri() ?>/img/avatar.png">
                                </div>
                                <div class="navbar__username">Đăng nhập</div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container-wrapper header-with-search-wrapper">
        <div class="container header-with-search ">
            <a class="header-with-search__logo-section" href="/">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo2.png" class="logo"/>
            </a>
            <div class="header-with-search__search-section">
                <div class="searchbar">
                    <form role="search" class="" autocomplete="off" action="<?php echo home_url( '/'); ?>">
                        <input
                                placeholder="FLASH SALE" class="" name="s"
                                maxlength="128" autocomplete="off"
                                aria-expanded="false" role="combobox" value="">
                        <input type="hidden" name="post_type" value="product" />
                    <button type="submit"
                            class="btn btn-solid-primary btn--s btn--inline shopee-searchbar__search-button">
                        <svg height="19" viewBox="0 0 19 19" width="19" class="shopee-svg-icon">
                            <g fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g transform="translate(-1016 -32)">
                                    <g>
                                        <g transform="translate(405 21)">
                                            <g transform="translate(611 11)">
                                                <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z"></path>
                                                <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                    </form>
                </div>

            </div>
            <div class="header-with-search__cart-wrapper">
                <div class="stardust-popover" id="cart_drawer_target_id">
                    <div role="button" class="stardust-popover__target">
                        <div class="cart-drawer-container">
                            <a class="cart-drawer flex v-center"
                               id="cart_drawer_target_id"
                               href="<?php echo wc_get_cart_url() ?>">
                                <svg viewBox="0 0 26.6 25.6"
                                     class="shopee-svg-icon navbar__link-icon icon-shopping-cart-2">
                                    <polyline fill="none"
                                              points="2 1.7 5.5 1.7 9.6 18.3 21.2 18.3 24.6 6.1 7 6.1"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="2.5"></polyline>
                                    <circle cx="10.7" cy="23" r="2.2" stroke="none"></circle>
                                    <circle cx="19.7" cy="23" r="2.2" stroke="none"></circle>
                                </svg>
                                <!--                                <div class="shopee-cart-number-badge">126</div>-->
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="body">
    <div class="container"><?php woocommerce_breadcrumb(); ?></div>

<?php do_action('storefront_before_header'); ?>