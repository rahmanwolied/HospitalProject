<?php
    $local = true;
    $host = 'sql12.freesqldatabase.com';
    $dbusername = 'sql12608733';
    $password = 'KJ8f2GYp95';
    $dbname = 'sql12608733';

    if($local){
        $host = 'localhost';
        $dbusername = 'root';
        $password = '';
        $dbname = 'pharm_air';
    }
    $conn = mysqli_connect($host, $dbusername, $password, $dbname); 

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>