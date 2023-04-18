<?php
    include('config/dbconnect.php');
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    $output = "";
    if($result){
        $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($customers as $customer){
            if($customer['Name'] === null){
                $customer['Name'] = $customer['First_Name'] . " " . $customer['Last_Name'];
            }
            $output .= "<tr>
                            <td>{$customer['C_ID']}</td>
                            <td>{$customer['Name']}</td>
                            <td>{$customer['Email']}</td>
                            <td>{$customer['Phone']}</td>
                        </tr>";
        }
        echo $output;
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>