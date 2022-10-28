jQuery(".btn_show_all").on('click', function () {
    jQuery('.compact_box').toggleClass('show_all');
});
// jQuery(".filter_price").change(function () {
//     var link = jQuery(this).data('link');
//     if (this.checked) {
//         var url = location.protocol + '//' + location.host + location.pathname + '?' + link;
//     } else {
//         link=link.delete_param('min_price').delete_param('max_price');
//         var url = location.protocol + '//' + location.host + location.pathname + '?' + link;
//     }
//     window.location.href = url;
//
// });
// String.prototype.delete_param = function (key) {
//     var param = this.split("&");
//     console.log(param);
//     for (var k in param) {
//         var pos = param[k].indexOf(key);
//         if(pos>-1){
//             param.splice(k, 1);
//             return param.join('&');
//         }
//     }
// }
jQuery(document).ready(function ($) {
    setInterval(function () {
        // moveRight();
    }, 5000);
    let screenWidth = $(window).width();
    if (screenWidth < 768) {
        $('.slider ul li').css({width: screenWidth, height: 200});
    }
    var slideCount = $('.slider ul li').length;
    var slideWidth = $('.slider ul li').width();
    var slideHeight = $('.slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;
    $('.slider').css({width: slideWidth, height: slideHeight});
    $('.slider ul').css({width: sliderUlWidth, marginLeft: -slideWidth});

    $('.slider ul').css({width: sliderUlWidth});

    $('.slider ul li:last-child').prependTo('.slider ul');

    function moveLeft() {
        $('.slider ul').animate({
            left: +slideWidth
        }, 1000, function () {
            $('.slider ul li:last-child').prependTo('.slider ul');
            $('.slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('.slider ul').animate({
            left: -slideWidth
        }, 1000, function () {
            $('.slider ul li:first-child').appendTo('.slider ul');
            $('.slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});

jQuery('#wp-comment-cookies-consent').prop('checked', 'checked')

jQuery(document).ready(function ($) {

    $('form.cart').on('click', 'button.plus, button.minus', function () {

        // Get current quantity values
        var qty = $(this).closest('form.cart').find('.qty');
        var val = parseFloat(qty.val());
        var max = parseFloat(qty.attr('max'));
        var min = parseFloat(qty.attr('min'));
        var step = parseFloat(qty.attr('step'));

        // Change the value if plus or minus
        if ($(this).is('.plus')) {
            if (max && (max <= val)) {
                qty.val(max);
            } else {
                qty.val(val + step);
            }
        } else {
            if (min && (min >= val)) {
                qty.val(min);
            } else if (val > 1) {
                qty.val(val - step);
            }
        }

    });

});
