<?php
    include('config/dbconnect.php');
    $sql = "SELECT * FROM suppliers";
    $result = mysqli_query($conn, $sql);
    $output = "";
    if($result){
        $suppliers = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($suppliers as $supplier){
            $output .= "<option value='{$supplier['S_ID']}'>{$supplier['Name']}</option>";
        }
        echo $output;
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>