<?php
/**
 * Template name: Shop
 */
get_header();
?>
    <main id="main" class="site-main" role="main">
        <aside>
            <?php dynamic_sidebar('sidebar-shop'); ?>
        </aside>
        <section>
            <?php
            do_action('woocommerce_before_shop_loop');
            
            ?>

            <ul class="products columns-3">

                <?php
                $query_param = array(
                    'post_type' => 'product',
                    'orderby' => 'id',
                    'order' => 'ASC',
//                    'posts_per_page'=>1
                );
                $my_query = new WP_Query($query_param);
                if ($my_query->have_posts()):
                    while ($my_query->have_posts()): $my_query->the_post();
                        wc_get_template_part('content', 'product');

                    endwhile;
                endif;
                ?>
            </ul>

            <div class="pagination woocommerce-pagination">
                <?php wp_pagenavi($query_param); ?>
            </div>
        </section>
        <div class="clear"></div>
    </main>

<?php get_footer(); ?>