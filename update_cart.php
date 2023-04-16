<?php 
    include('config/dbconnect.php');
    session_start();
    $username = $_SESSION['username'];
    if(isset($_POST['prod_id']) && isset($_POST['quantity'])){
        $prod_id = $_POST['prod_id'];
        $quantity = $_POST['quantity'];
        $sql = "UPDATE cart SET quantity = '$quantity' WHERE c_id = '$username' AND pr_id = '$prod_id'"; 
        if(mysqli_query($conn, $sql)){
            echo 1;
        }
        else{
            echo 0;
        }
    }
?>