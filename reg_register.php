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



<body class="grey lighten-4">
    <ul class="grey lighten-4">
        <li class="tab col s3"><a class="active" href="reg_register.php">Regular Customer</a></li>
        <li class="tab col s3"><a  href="h_register.php">Hospital</a></li>
        <li class="tab col s3"><a href="p_register.php">Pharmacy</a></li>
        <li class="tab col s3"><a href="d_register.php">Diagnostic Center</a></li>
    </ul>



        <div class="container center login-card" >
            <div class="card white center">
                <div class="card-content">
                    <span class="card-title grey-text">Regular Customer</span>
                    <form class = "col s12" action="reg_register.php" method="POST">
                        <div class="form-names">

                            <div class="input-field">
                                <input type="text" name="fname" placeholder="First Name" autocomplete="off" value="<?php echo htmlspecialchars($fname) ?>">
                                <div class="red-text"> <?php echo htmlspecialchars($errors['fname']) ?>  </div>
                            </div>
                            
                            <div class="input-field">
                                <input type="text" name="lname" placeholder="Last Name" autocomplete="off" value="<?php echo htmlspecialchars($lname) ?>">
                                <div class="red-text"> <?php echo htmlspecialchars($errors['lname']) ?>  </div>
                            </div>
                        </div>
                        
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>" autocomplete="off" class="validate">
                            <div class="red-text"> <?php echo htmlspecialchars($errors['email']) ?>  </div>
                        </div>
                        
                        <div class="input-field">
                            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>" autocomplete="off" class="validate">
                            <div class="red-text"> <?php echo htmlspecialchars($errors['username']) ?>  </div>
                        </div>
                        
                        <div class="input-field">
                            <input type="password" name="pass" id="password" placeholder="Pasword" autocomplete="off">
                            <div class="red-text"> <?php echo htmlspecialchars($errors['pass']) ?>  </div>
                        </div>
                        
                        <div class="input-field">
                            <input type="password" name="passconfirm" placeholder="Confirm Password" autocomplete="off">
                            <div class="red-text"> <?php echo htmlspecialchars($errors['passconfirm']) ?>  </div>
                        </div>

                        <div class="center">
                            <input style="margin-top: 20px;"type="submit" name="submit" value="Register" class="btn brand z-depth-0">
                        </div>

                        <div class="grey-text center account-have" style="padding-top: 24px;">
                            Already have an account?<a class="blue-text" href="index.php"> Sign in</a>
                        </div>

                    </div>
                </div>
        </div>

</body>
</html>