<?php
/**
 * Template Name: Project
 */
get_header();
?>
    <h1></h1>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="row">
                <?php
                $query_param = array(
                    'post_type' => 'project',
                    'orderby' => 'id',
                    'order' => 'ASC',
                );
                $my_query = new WP_Query($query_param);
                $i = 0;
                if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                    $i++;
                    ?>
                    <div class="col-sm-3">
                        <div class="project clearfix">
                            <a href="<?php the_permalink() ?>" class="woocommerce-LoopProduct-link">
                                <?php the_post_thumbnail('size-woocommerce_thumbnail') ?>
                            </a>
                            <div class="des">
                                <h3><?php the_title() ?></h3>
                                <p><?php echo get_the_excerpt() ?></p>
                            </div>

                        </div>

                    </div>
                    <?php
                    if ($i % 4==0):
                    ?>
                    <div class="clear"></div>
                    <?php
                endif;
                endwhile;
                endif;
                ?>
            </div>
            <?php
            //            while (have_posts()) :
            //                the_post();
            //            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>