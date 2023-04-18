<?php 
    include('config/dbconnect.php');
    $sql = "SELECT * FROM orders INNER JOIN payment ON orders.o_id = payment.id ORDER BY o_id DESC;";
    $result = mysqli_query($conn, $sql);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $count = 5;
    $table1 = "";
    $table2 = "";
    if ($_POST['count'] != 5){
        $count = mysqli_num_rows($result);
    }

    if($result){
        if ($_POST['count'] == 1){
            for($i = 0; $i < $count; $i++){
                $table1 .= "<tr>
                                <td>{$orders[$i]['o_id']}</td>
                                <td>{$orders[$i]['order_date']}</td>
                                <td>{$orders[$i]['c_id']}</td>
                                <td>৳{$orders[$i]['amount']}</td>
                                <td>{$orders[$i]['status']}</td>
                                <td> <button data-o-id='{$orders[$i]['o_id']}'> Confirm Delivery </button> </td>
                            </tr>";
            }
        }
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "SELECT pr_id, COUNT(*) AS count
    FROM cart
    INNER JOIN orders ON orders.cart_id = cart.cart_id AND orders.c_id = cart.c_id
    GROUP BY pr_id
    ORDER BY count DESC
    LIMIT 3";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($rows as $row){
        $pr_id = $row['pr_id'];
        $sql = "SELECT * FROM product WHERE ID = '$pr_id'";
        $result = mysqli_query($conn, $sql);
        $pr = mysqli_fetch_assoc($result);
        $pr_name = $pr['Name'];
        $pr_price = $pr['Price'];
        $pr_quantity = $pr['Stock_Quantity'];
        $order_count = $row['count'];
        $table2 .= "<tr>
                        <td>{$pr_name}</td>
                        <td>৳{$pr_price}</td>
                        <td>{$pr_quantity}</td>
                        <td>{$order_count}</td>
                    </tr>";
    }


    $data = array(
        'table1' => $table1,
        'count' => count($orders),
        'table2' => $table2
    );


    echo json_encode($data);
?>