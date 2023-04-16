<?php
    include('config/dbconnect.php');
    session_start();
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM orders WHERE c_id = '$username'";
    $result = mysqli_query($conn, $sql);
    $cart_id = mysqli_num_rows($result) + 1;

    if(isset($_POST['method']) && isset($_POST['total'])){
        $method = $_POST['method'];
        $total = $_POST['total'];
        $current_date = date('Y-m-d');
        $due_date = date('Y-m-d', strtotime($current_date. ' + 3 days'));
        
        $sql = "SELECT * FROM drone ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $d_reg = $row['reg'];

        $sql = "INSERT INTO payment (amount, method, due_date, pay_date) VALUES ('$total', '$method', '$due_date', '$current_date')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $sql = "INSERT INTO orders (status, order_date, delivery_date, d_reg, cart_id, c_id) VALUES ('Pending', '$current_date', '$due_date', '$d_reg', '$cart_id', '$username')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $sql = "SELECT * FROM cart WHERE c_id = '$username' AND cart_id = '$cart_id'";
                $result = mysqli_query($conn, $sql);
                $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($items as $item){
                    $pr_id = $item['pr_id'];

                    $sql = "SELECT * FROM product WHERE ID = '$pr_id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $pr_quantity = $row['Stock_Quantity'];

                    $quantity = $item['quantity'];

                    $new_quantity = $pr_quantity - $quantity;

                    $sql = "UPDATE product SET Stock_Quantity = '$new_quantity' WHERE ID = '$pr_id'";
                    $result = mysqli_query($conn, $sql);
                }
                    if($result){
                        echo 1;
                    }
                    else{
                        echo 0;
                    }        
                }
                
            else{
                echo 0;
            }

    }
}

?>