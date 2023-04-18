<?php
    include('config/dbconnect.php');
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $admin = mysqli_fetch_assoc($result);
        if($admin){
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else{
        echo 0;
    }
?>