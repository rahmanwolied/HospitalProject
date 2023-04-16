$(document).ready(function(){
    var username = $("#orders").data('username');

    $.ajax({
        url: 'show_orders.php',
        method: 'POST',
        data: {username: username},
        success: function(data) {
            if(data == 0) {
                $("#orders").html("Please login first")
            }
            else if(data == 1) {
                $("#message").html("No orders yet")
            }
            else {
                $("#orders").html(data)
            }
        }
    });
});