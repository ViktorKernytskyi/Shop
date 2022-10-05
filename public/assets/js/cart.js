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
            if(!res[id] || res[id].qty < 1 ) {
               removeElCart(id)
                return
            }

            if ($('#cartValue_' + id).length){
                $('#cartValue_' + id  ).val(res[id].qty)
                let total = res[id].price * res[id].qty
                $('#priceId_' + id  ).text('UAH ' + parseFloat(total).toFixed(2))
            }
            // alert('success')
        },
        error: function (data) {
            alert(data.statusText)
        }
    });

}

function cartDelete(id) {
    $.ajax({
        type: "POST",
        url: "/cartDelete",
        data: {
           product_id: id

        },

        success: function (data) {
          removeElCart(id)
        },
        error: function (data) {
            alert(data.statusText)
        }
    });

}

function removeElCart(id) {
    $('#trId_' + id).remove()
}
