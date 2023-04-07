<?php
    $local = true;
    $host = 'sql12.freesqldatabase.com';
    $username = 'sql12608733';
    $password = 'KJ8f2GYp95';
    $dbname = 'sql12608733';

    if($local){
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'pharm_air';
    }
    $conn = mysqli_connect($host, $username, $password, $dbname); 

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>