$(".product-items, .product-items-button").on('click', function() {
    var name = $(this).data('name');
    var itemId = $(this).data('id');
    Swal.fire({
        title : name,
        inputLabel : '訂購數量',
        input: 'number',
        inputPlaceholder: '輸入你欲選購的數量',
        showCancelButton: true,
        cancelButtonText : '取消',
        confirmButtonText : '加入訂購',
        inputValidator: function (value) {
            return new Promise(function (resolve, reject) {
                if (value !== '') {
                    resolve();
                } else {
                    resolve('數量不得為空');
                }
            });
        }
    }).then(function (result) {
        var nums = result.value;
        if (result.isConfirmed) {
            $.ajax({
                type : 'POST',
                url : 'api/cart/add',
                data : {
                    'item' : itemId, 'nums' : nums,
                },
                beforeSend : function(){},
                success : function(res) {
                    if (res.success == true && res.count > 0) {
                        $(".cart-count").html(res.count);
                    }
                }
            });
            // Swal.fire({
            //     icon: 'success',
            //     html: 'You selected: ' + result.value
            // });
        }
    });
});

