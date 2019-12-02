$('.buy_now').click(function(event) {
    event.preventDefault();
    var href = $(this).attr('href');
    var tenlt = $(this).data('name')
    var view_alert = $('#modal-add-cart #alert-pro-name');

    $.ajax({
        type: "GET",
        url: href,
        data: {},

        success: function(res) {
            if (res) {
                view_alert.html('Đã thêm sản phẩm laptop <Strong>' + tenlt + '</strong> vào giỏ hàng');
                $('#modal-add-cart').modal('show');
            } else {
                vew_allert.html('Sản phẩm chưa được thêm vào");')
            }
        }
    });
    
});
