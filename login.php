<?php 
    include('config/dbconnect.php');
    $error = false;

    if (isset($_POST['username']) && isset($_POST['password'])){
        // check username
        if(empty($_POST['username'])){
            echo 'Please type your username';
            $error = true;
        } 
        else{
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $sql = "SELECT * FROM customers WHERE c_id = '$username'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 0){
                echo 'No user with this username found';
                $error = true;
            }
            else{
                $cpass = mysqli_fetch_assoc($result)['password'];

                if(empty($_POST['password'])){
                    echo 'Please type your password';
                    $error = true;
                } else{
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    if($password != $cpass){
                        echo 'Password is incorrect';
                        $error = true;
                    }
                }
            }
        }
        
        if(!$error){
            session_start();
            $_SESSION['username'] = $username;
            echo 1;
            exit();
        }
    
    }
?>