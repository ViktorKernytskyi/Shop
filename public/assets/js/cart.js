$.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});

function addToCard(id, operation = undefined, qty) {
    $.ajax({
        type: "POST",
        url: "/addToCart",
        dataType:"html",
        data: {
            product_id: id,
            operation: operation,

            product: qty

        },
        success: function (data) {
            let res = JSON.parse(data);

            let cart = res.cart

            $('#cartSubTotal'  )
                .text('UAH ' + parseFloat(res.total.sum).toFixed(2))
            $('#count'  )
                .text('int' + parseFloat(res.total.count).toFixed(2))
            $('#Total'  )
                .text('UAH ' + parseFloat(res.total.sum).toFixed(2))

           //   let cartTotal = res.total // cartTotal.sum, cartTotal.count
           // // let cartTotal = $("#res.total");
            if(!cart[id] || cart[id].qty < 1 ) {
               removeElCart(id)
                return
            }

            if ($('#cartValue_' + id).length){
                $('#cartValue_' + id  ).val(cart[id].qty)
                let total = cart[id].price * cart[id].qty
                $('#priceId_' + id  ).text('UAH ' + parseFloat(total).toFixed(2))
            }
            // alert('success')
        },
        error: function (data) {
            alert(data.statusText)
        }
    });

}
function cartDelete(id, qty) {
    $.ajax({
        type: "POST",
        url: "/cartDelete",
        data: {
            product_id: id,
            product: qty
        },
        success: function (data) {
            $('#cartSubTotal'  )
               .text('UAH ' + parseFloat(data.total.sum).toFixed(2))
            $('#count'  )
                .text('int ' + parseFloat(data.total.count).toFixed(2))
            removeElCart(id)
            $('#Total'  )
                .text('UAH ' + parseFloat(data.total.sum).toFixed(2))
        },
        error: function (data) {
            alert(data.statusText)
        }
    });

}

function removeElCart(id) {
    $('#trId_' + id).remove()

}
