
jQuery(".filter_price").change(function () {
    var link = jQuery(this).data('link');
    if (this.checked) {
        var url = location.protocol + '//' + location.host + location.pathname + '?' + link;
    } else {
        link=link.delete_param('min_price').delete_param('max_price');
        var url = location.protocol + '//' + location.host + location.pathname + '?' + link;
    }
    window.location.href = url;

});
String.prototype.delete_param = function (key) {
    var param = this.split("&");
    console.log(param);
    for (var k in param) {
        var pos = param[k].indexOf(key);
        if(pos>-1){
            param.splice(k, 1);
            return param.join('&');
        }
    }
}