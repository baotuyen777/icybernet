jQuery(".btn_show_all").on('click', function () {
    jQuery('.compact_box').toggleClass('show_all');
    jQuery('.bg-article').toggle();
    if(jQuery('.compact_box').hasClass('show_all')){
        jQuery('.btn_show_all').text('Thu gọn')
    }else{
        jQuery('.btn_show_all').text('Xem thêm')
    }

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


    // jQuery('.buy_now').on('click', (event) => {
    //     event.preventDefault();
    //     return false;
    //     if ($('.add_to_cart_button').hasClass('disabled')) {
    //         event.preventDefault();
    //         alert(1);
    //         return;
    //     }
    // })

    // timer flash sale
    const date = new Date('2022-11-04 3:05:10');
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    let timeout = null; // Timeout

    function start() {
        if (s === -1) {
            m -= 1;
            s = 59;
        }

        if (m === -1) {
            h -= 1;
            m = 59;
        }

        //  - Dừng chương trình
        if (h == -1) {
            clearTimeout(timeout);
            console.log('Hết giờ');
            return false;
        }

        /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
        document.getElementById('h').innerText = (h > 9 ? h : '0' + h).toString();
        document.getElementById('m').innerText = (m > 9 ? m : '0' + m).toString();
        document.getElementById('s').innerText = (s > 9 ? s : '0' + s).toString();

        /*BƯỚC 2: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
        timeout = setTimeout(() => {
            s--;
            start()
        }, 1000);
    }

    setTimeout(start, 100)

});
