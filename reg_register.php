<?php include("config/dbconnect.php")?>

<?php
    $fname = $lname = $email = $username = $pass = $passconfirm = "";
    $errors = array('fname' => '', 'lname' => '', 'email' => '', 'username' => '', 'pass' => '', 'passconfirm' => '');

    if (isset($_POST['submit'])){
        // check first name
        if(empty($_POST['fname'])){
            $errors['fname'] = 'A first name is required ';
        } else{
            $fname = $_POST['fname'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $fname)){
                $errors['fname'] = 'First name must be letters and spaces only';
            }
        }
        // check last name
        if(empty($_POST['lname'])){
            $errors['lname'] = 'A last name is required';
        } else{
            $lname = $_POST['lname'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
                $errors['lname'] = 'Last name must be letters and spaces only';
            }
        }
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required';
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be a valid email address';
            }
        }
        // check username
        if(empty($_POST['username'])){
            $errors['username'] = 'A username is required';
        } else{
            $username = $_POST['username'];
            if(!preg_match('/^[a-zA-Z0-9]+$/', $username)){
                $errors['username'] = 'Invalid characters in username';
            }
        }
        // check password
        if(empty($_POST['pass'])){
            $errors['pass'] = 'A password is required';
        } else{
            $pass = $_POST['pass'];
            if(!preg_match('/^[a-zA-Z0-9]+$/', $pass)){
                $errors['pass'] = 'Invalid characters in password';
            }
        }
        // check password confirmation
        if(empty($_POST['passconfirm'])){
            $errors['passconfirm'] = 'You have to Type the password again';
        } else if($_POST['passconfirm'] != $_POST['pass']){
            $errors['passconfirm'] = 'Passwords do not match';
    }

    if(!array_filter($errors)){
        $sql = "INSERT INTO customers(first_name, last_name, email, c_id, password) VALUES('$fname', '$lname', '$email', '$username', '$pass')";

        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        } else{
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}

?>

<?php include('templates/header.php'); ?>

<div style="background: #f5f5f5; position: absolute; bottom: 0; right: 0; left: 0; top: 64px;">

    <div class="login-card active">
        <div class="login-img">
            <img src="assets/img-redbox.jpg" alt="">
        </div>
        
        <div class="register-content">
            <h3>Regular Customer</h3>
            <div class="form-content register">
                
                <form action="reg_register.php" method="POST">
                    <div>
                        <input class="register-field" type="text" name="fname" placeholder="First Name" autocomplete="off" value="<?php echo htmlspecialchars($fname) ?>">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['fname']) ?>  </div>
                    </div>
                    
                    <div>
                        <input class="register-field" type="text" name="lname" placeholder="Last Name" autocomplete="off" value="<?php echo htmlspecialchars($lname) ?>">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['lname']) ?>  </div>
                    </div>
                    
                    <div>
                        <input class="register-field" type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>" autocomplete="off" class="validate">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['email']) ?>  </div>
                    </div>
                    
                    <div>
                        <input class="register-field" type="text" name="username" id="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>" autocomplete="off" class="validate">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['username']) ?>  </div>
                    </div>
                    
                    <div>
                        <input class="register-field" type="password" name="pass" id="password" placeholder="Pasword" autocomplete="off">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['pass']) ?>  </div>
                    </div>
                    
                    <div>
                        <input class="register-field" type="password" name="passconfirm" placeholder="Confirm Password" autocomplete="off">
                        <div class="red-text"> <?php echo htmlspecialchars($errors['passconfirm']) ?>  </div>
                    </div>
                    <div>
                        <input class="register-field" type="number" name="phone" placeholder="Phone" autocomplete="off">
                    </div>
                    <div>
                        <input class="register-field" type="text" name="city" placeholder="City" autocomplete="off">
                    </div>
                    <div>
                        <input class="register-field" type="text" name="street" placeholder="Street" autocomplete="off">
                    </div>
                    
                    <div >
                        <input class="submit-btn" type="submit" name="submit" value="Register" class="btn brand z-depth-0">
                    </div>
                </div>
                <div style="padding: 10px; font-size: 0.5rem;">
                    Already have an account?<a class="blue-text" href="index.php"> Sign in</a>
                </div>
            </div>
            
        </div>
</div>
        
        </html>