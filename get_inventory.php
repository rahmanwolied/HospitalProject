<?php
    include('config/dbconnect.php');
    $sql = "SELECT * FROM product ORDER BY Stock_Quantity ASC";
    $result = mysqli_query($conn, $sql);
    $output = "";
    if($result){
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($products as $product){
            $output .= "<tr>
                            <td>{$product['ID']}</td>
                            <td>{$product['Name']}</td>
                            <td>৳ {$product['Price']}</td>
                            <td>{$product['Stock_Quantity']}</td>
                            <td>
                                <button data-id='{$product['ID']}' class='btn-edit'>Order More</button>
                                <button data-id='{$product['ID']}' class='btn-delete'>Delete</button>
                            </td>
                        </tr>";
        }
        echo $output;
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>