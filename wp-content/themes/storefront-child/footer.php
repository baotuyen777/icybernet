<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<!--	--><?php //do_action( 'storefront_before_footer' ); ?>

<footer id="colophon" class="site-footer1" role="contentinfo">
    <div class="row_custom col-full">
        <div class="col">  <?php dynamic_sidebar('footer-1'); ?></div>
        <div class="col"> <?php dynamic_sidebar('footer-2'); ?></div>
        <div class="col"><?php dynamic_sidebar('footer-3'); ?></div>
        <div class="clear"></div>
    </div>

    <div class="col-full">
        <!--        <a href="https://facebook.com/gagu">-->
        <!--            <img src="--><?php //echo get_stylesheet_directory_uri()?><!--/img/fb.png"/>-->
        <!--        </a>-->
        <!--        <a href="https://instagram.com/gagu">-->
        <!--            <img src="--><?php //echo get_stylesheet_directory_uri()?><!--/img/insta.png"/>-->
        <!--        </a>-->
        <!--        <a href="https://youtube.com/gagu"><img src="-->
        <?php //echo get_stylesheet_directory_uri()?><!--/img/yt.png"/> </a>-->

        <?php
        /**
         * Functions hooked in to storefront_footer action
         *
         * @hooked storefront_footer_widgets - 10
         * @hooked storefront_credit         - 20
         */
        //			do_action( 'storefront_footer' );
        ?>

    </div><!-- .col-full -->
    <div class="text-center copyright">© 2019 gagu.vn. All rights reserved.</div>
</footer><!-- #colophon -->

<!--	--><?php //do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php wp_footer(); ?>

<script  id='main1-js' src="<?php echo get_stylesheet_directory_uri() . '/js/main.js'?>"></script>
<script>
    $( function() {
        var icons = {
            header: "ui-icon-circle-arrow-e",
            activeHeader: "ui-icon-circle-arrow-s"
        };
        $( "#tab-together_tab" ).accordion({
            icons: icons,
            heightStyle: "content",
            collapsible: true
        });
        $( "#toggle" ).button().on( "click", function() {
            if ( $( "#tab-together_tab" ).accordion( "option", "icons" ) ) {
                $( "#tab-together_tab" ).accordion( "option", "icons", null );
            } else {
                $( "#tab-together_tab" ).accordion( "option", "icons", icons );
            }
        });
    } );
</script>
</body>
</html>

