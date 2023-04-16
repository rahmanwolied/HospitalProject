$(document).ready(function(){
    $("#error").hide();
    $('#register-form').on("submit", function(e){
        e.preventDefault();

        if ($("#firstname").length && $("#lastname").length) {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
        }
        else if($("#name").length) {
            var name = $('#name').val();
        }

        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var street = $('#street').val();
        var zip = $('#zip').val();


        if(password != password2){
            $('#error').html("Passwords do not match").show();
        }

        else{
            $.ajax({
                url: 'register.php',
                type: 'POST',
                data: {
                    name: name,
                    firstname: firstname, 
                    lastname: lastname, 
                    username: username, 
                    email: email, 
                    password: password,
                    phone: phone, 
                    address: address, 
                    city: city, 
                    street: street, 
                    zip: zip},
    
                success: function(data){
                    console.log(data);
                    if(data == 1){
                        window.location.href = '../index.php';
                        $('#error').hide();
                    }
                    else{
                        $('#error').html(data).show();
                    }
                }            
        });
        }
    });
});