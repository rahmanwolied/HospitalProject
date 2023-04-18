<?php 
    include('config/dbconnect.php');
    session_start();
    $username = $_SESSION['username'];
    if(isset($_POST['prod_id']) && isset($_POST['quantity'])){
        $prod_id = $_POST['prod_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['subtotalTotal'];
        $sql = "SELECT * from customers WHERE C_ID = '$username'";
        $result = mysqli_query($conn, $sql);
        $customer = mysqli_fetch_assoc($result);
        $discount = $customer['Discount'];
        
        $discount= intval($total * ($discount/100));

        $sql = "UPDATE cart SET quantity = '$quantity' WHERE c_id = '$username' AND pr_id = '$prod_id'"; 
        if(mysqli_query($conn, $sql)){
            echo $discount;
        }
        else{
            echo 0;
        }
    }
?>