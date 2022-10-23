<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <div class="error-404 not-found">

                <div class="page-content container">
                    <section class="white padding20 m-b-30">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'storefront'); ?></h1>
                        </header><!-- .page-header -->

                        <p><?php esc_html_e('Nothing was found at this location. Try searching, or check out the links below.', 'storefront'); ?></p>

                        <?php

                        if (storefront_is_woocommerce_activated()) {
                            the_widget('WC_Widget_Product_Search');
                        } else {
                            get_search_form();
                        }
                        ?>
                    </section>

                    <section class="stardust-tabs-panels__panel container">
                        <div class="shopee-header-section__header">
                            <div class="shopee-header-section__header__title"><span
                                        class="OJR0Qm">Sản phẩm đang hot</span>
                            </div>
                            <a class="shopee-header-section__header-link" tabindex="-1"
                               href="<?php echo wc_get_page_permalink( 'shop' ) ?>">
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

                </div><!-- .page-content -->
            </div><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
