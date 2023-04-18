<?php
    include('config/dbconnect.php');
    if(isset($_POST['oID'])){
        $oID = $_POST['oID'];
        $status = 'Delivered';
        $sql = "UPDATE orders SET status = '$status' WHERE o_id = $oID";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>