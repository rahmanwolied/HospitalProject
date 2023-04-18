<?php 
    include('config/dbconnect.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        $sql = "SELECT * FROM customers WHERE c_id = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo 'Username already exists';
        } else{
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $street = mysqli_real_escape_string($conn, $_POST['street']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $zip = mysqli_real_escape_string($conn, $_POST['zip']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            
            if (isset($_POST['firstname']) && isset($_POST['lastname'])){
                $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
                $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

                $sql = "INSERT INTO customers (c_id, password, first_name, last_name, email, phone, address, city, street, zip) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$phone', '$address', '$city', '$street', '$zip')";
            }else if(isset($_POST['name'])){
                $name = mysqli_real_escape_string($conn, $_POST['name']);

                $sql = "INSERT INTO customers (c_id, password, name, email, phone, address, city, street, zip, discount) VALUES ('$username', '$password', '$name', '$email', '$phone', '$address', '$city', '$street', '$zip', 5)";
            }
            if(mysqli_query($conn, $sql)){
                echo 1;
            } else{
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
?>