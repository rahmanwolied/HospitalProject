$(document).ready(function(){
    $('#branch-no').on('input', function() {
        // Get the number of branches
        var numBranches = $(this).val();
        
        // Clear the branch divs
        $('#branchDivs').empty();
        
        // Create the branch divs
        for (var i = 0; i < numBranches; i++) {
            var branchDiv = $('<div>').addClass('branch');
            var branchDivitem = $('<div>');
            var branchLabel = $('<label>').attr('for', 'branch_' + i).text('Branch ' + (i+1) + ':');
            var branchInput = $('<input>').attr('type', 'text').attr('id', 'branch_' + i).attr('name', 'branch_' + i);
            branchDivitem.append(addressLabel).append(addressInput);
            var addressDiv = $('<div>');
            var addressLabel = $('<label>').attr('for', 'address_' + i).text('Address:');
            var addressInput = $('<input>').attr('type', 'text').attr('id', 'address_' + i).attr('name', 'branch_' + i);
            addressDiv.append(addressLabel).append(addressInput);

            branchDiv.append(branchDivitem).append(addressDiv);
            $('#branchDivs').append(branchDiv);
        }
    });
    
    $("#error").hide();
    $('#register-form').on("submit", function(e){
        e.preventDefault();

        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
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