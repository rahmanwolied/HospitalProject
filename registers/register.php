<?php 
    include('../config/dbconnect.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        $sql = "SELECT * FROM customers WHERE c_id = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo 'Username already exists';
        } else{
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $street = mysqli_real_escape_string($conn, $_POST['street']);
            $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    
            $sql = "INSERT INTO customers (c_id, password, first_name, last_name, email, phone, address, city, street, zip) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$phone', '$address', '$city', '$street', '$zip')";
            if(mysqli_query($conn, $sql)){
                echo 1;
            } else{
                echo 'Error: ' . mysqli_error($conn);
            }
        }

    }
?>