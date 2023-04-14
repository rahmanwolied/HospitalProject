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


<!-- <!DOCTYPE html>
<html>
    <div class="flex-item2">

        <div class="container center login-card" >
            <div class="card white center">
                <div class="card-content">
                    <span class="card-title grey-text">Login</span>
                    <form class = "col s12" action="login.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>//" >
                            <div class="red-text"> <?php echo htmlspecialchars($errors['username']) ?>  </div>
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>">
                            <label for="password">Password</label>
                            <div class="red-text"> <?php echo htmlspecialchars($errors['password']) ?>  </div>
                        </div>
                        <div class="center">
                            <input style="margin-top: 20px;"type="submit" name="submit" value="Login" class="btn brand z-depth-0">
                        </div>
                        <span class="center"> <a style="font-size: 12px; margin-top: 10px; display: inline-block; margin-bottom: 50px;" class="grey-text" href="#">Forgot Password?</a></span>
                        <div class= "grey-text">
                            <span class="center"> New user? <a style="font-size: 12px; margin-top: 10px; display: inline-block; margin-bottom: 50px;" class="blue-text" href="register.php">Create account</a></span>
                        </div>

                    </div>
                </div>
            </div>

            
        </div>
        
    </div>

</html> -->