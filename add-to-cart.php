<?php
    include('config/dbconnect.php');
    session_start();
    if (!isset($_SESSION['username'])){
        echo 0;
        exit();
    }

    else{
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM orders WHERE c_id = '$username'";
        $result = mysqli_query($conn, $sql);
        $cart_id = mysqli_num_rows($result) + 1;

        $product_id = $_POST['productId'];
        $quantity = $_POST['quantity'];

        $sql = "SELECT * FROM cart WHERE pr_id = '$product_id' AND c_id = '$username' AND cart_id = '$cart_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo 2;
            exit();
        }
        else{
            $sql = "INSERT INTO cart (pr_id, c_id, cart_id, quantity) VALUES ('$product_id', '$username', '$cart_id', '$quantity')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo 1;
            }else{
                echo 0;
            }
        }
    }
?>