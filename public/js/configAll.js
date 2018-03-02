$(document).ready(function () {
    $("[id=product_add]").click(function () {
        var idProduct = $(this).attr('idProduct');
        var urlResource = location.origin + "/product/cart_add/" + idProduct;
        dataSend = {
            _token: $('meta[name="csrf-token"]').attr('content')
        };
        $.ajax({
          type: 'POST',
          url: urlResource,
          data: dataSend
        }).done(function(response){
            location.href = location.origin+'/product';
        });
    });
});