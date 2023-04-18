$(document).ready(function(){
    $('#numBranches').on('input', function() {
        // Get the number of branches
        var numBranches = $(this).val();
        
        // Clear the branch divs
        $('#branchDivs').empty();
        
        // Create the branch divs
        for (var i = 1; i <= numBranches; i++) {
            var branch = $('<div>').addClass('branch');
                var branchDiv = $('<div>').addClass('branchDiv');
                    var branchLabel = $('<label>').attr('for', 'branch_' + i).text('Branch ' + i + ':');
                    var branchInput = $('<input>').attr('type', 'text').attr('id', 'branch_' + i).attr('name', 'branch_' + i).attr('required', true);
                    branchDiv.append(branchLabel).append(branchInput);
                var addressDiv = $('<div>').addClass('addressDiv');
                    var addressLabel = $('<label>').attr('for', 'address_').text('Address:');
                    var addressInput = $('<input>').attr('type', 'text').attr('id', 'address_' + i).attr('name', 'address_' + i).attr('required', true);
                    addressDiv.append(addressLabel).append(addressInput);
                var cityDiv = $('<div>').addClass('cityDiv');
                    var cityLabel = $('<label>').attr('for', 'city_' + i).text('City:');
                    var cityInput = $('<input>').attr('type', 'text').attr('id', 'city_' + i).attr('name', 'city_' + i).attr('required', true);
                    cityDiv.append(cityLabel).append(cityInput);
                var streetDiv = $('<div>').addClass('streetDiv');
                    var streetLabel = $('<label>').attr('for', 'street_' + i).text('Street:');
                    var streetInput = $('<input>').attr('type', 'text').attr('id', 'street_' + i).attr('name', 'street_' + i).attr('required', true);
                    streetDiv.append(streetLabel).append(streetInput);
                var zipDiv = $('<div>').addClass('zipDiv');
                    var zipLabel = $('<label>').attr('for', 'zip_' + i).text('Zip:');
                    var zipInput = $('<input>').attr('type', 'text').attr('id', 'zip_' + i).attr('name', 'zip_' + i).attr('required', true);
                    zipDiv.append(zipLabel).append(zipInput);
                
            branch.append(branchDiv).append(addressDiv).append(cityDiv).append(streetDiv).append(zipDiv);
            $('#branchDivs').append(branch);
        }
    });
    
    $("#error").hide();
    $('#register-form').on("submit", function(e){
        e.preventDefault();
        
        var name = $('#name').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var phone = $('#phone').val();
        var numBranches = $('#numBranches').val();

        var branches = [];
        var addresses = [];
        var cities = [];
        var streets = [];
        var zips = [];
        
        for (var i = 1; i <= numBranches; i++) {
            branches.push($('#branch_' + i).val());
            addresses.push($('#address_' + i).val());
            cities.push($('#city_' + i).val());
            streets.push($('#street_' + i).val());
            zips.push($('#zip_' + i).val());
        }

        if(password != password2){
            $('#error').html("Passwords do not match").show();
        }

        else{
            $.ajax({
                url: 'hospital.php',
                type: 'POST',
                data: {
                    name: name,
                    username: username, 
                    email: email, 
                    password: password,
                    phone: phone, 
                    numBranches: numBranches,
                    branches: branches,
                    addresses: addresses,
                    cities: cities,
                    streets: streets,
                    zips: zips},
    
                success: function(data){
                    console.log(data);
                    if(data == 1){
                        window.location.href = 'index.php';
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