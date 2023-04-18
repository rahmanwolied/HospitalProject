<?php
    include('config/dbconnect.php');
    if(isset($_POST['pID']) && isset($_POST['sID']) && $_POST['quantity'] ){
        $sID = $_POST['sID'];
        $pID = $_POST['pID'];
        $quantity = $_POST['quantity'];
        $sql = "SELECT * FROM product WHERE ID = $pID";
        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result);
        $stock = $product['Stock_Quantity'];
        $newStock = $stock + $quantity;
        $sql = "UPDATE product SET Stock_Quantity = $newStock WHERE ID = $pID";
        if(mysqli_query($conn, $sql)){
            $current_date = date("Y-m-d");
            $sql = "INSERT INTO supplies (s_id, pr_id, supply_date, supply_quantity) VALUES ('$sID', $pID, '$current_date', $quantity)";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo 1;
            }
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


    }
?>