<?php
    include('config/dbconnect.php');
    session_start();
    $username = $_SESSION['username'];
    $output = "";
    if (isset($_POST['username'])){
        $sql = "SELECT * FROM orders WHERE c_id = '{$username}'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0){
            echo 1;
        }
        else{
            $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($orders as $order){
                $output .="<table >
                            <div class = 'order-info'>
                                <caption>Order ID: {$order['o_id']}</caption>
                                <caption class='order-info'>Status: {$order['status']}</caption>
                                <caption class='order-info'>Order Date: {$order['order_date']}</caption>";

                if($order['status'] == 'Delivered'){
                        $output.= "<caption class='order-info'>Delivery Date: {$order['delivery_date']}</caption>";
                }
                        $output .="<caption class='order-info'>Drone: {$order['d_reg']}</caption>
                                <thead>
                                    </div>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>                               
                                        <tbody>";
                
                $sql = "SELECT * FROM cart WHERE cart_id = {$order['cart_id']} && c_id = '{$username}' ";
                $result = mysqli_query($conn, $sql);
                $cart_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach($cart_items as $item){
                    $sql = "SELECT * FROM product WHERE ID = {$item['pr_id']}";
                    $result = mysqli_query($conn, $sql);
                    $product = mysqli_fetch_assoc($result);
                    $subtotal = $product['Price'] * $item['quantity'];
                    $output.="<tr>
                                <td class='image'>
                                    <img src='{$product['Img']}' alt='Product Image'>   
                                    <p>{$product['Name']}</p>
                                </td>
                                <td class='price'>
                                    <p>৳ {$product['Price']}</p>
                                </td>
                                <td class='quantity'>
                                    <p>{$item['quantity']}</p>
                                </td>
                                <td class='total'>
                                    <p>৳ {$subtotal}</p>
                                </td>
                            </tr>";
                } 
            }
            echo $output;
        }
    }
?>