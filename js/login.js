$(document).ready(function(){
    $('#login-form').on('submit', function(e){
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {username: username, password: password},
            success: function(data){
                if(data == 1){
                    location.reload();
                }
                else{
                    $('#error').html(data);
                }
            }
        });
    });
});