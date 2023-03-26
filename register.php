<?php
    $fname = $lname = $email = $username = $pass = $passconfirm = "";
    $errors = array('fname' => '', 'lname' => '', 'email' => '', 'username' => '', 'pass' => '', 'passconfirm' => '');

    if (isset($_POST['submit'])){

        if (empty($_POST['fname']) || empty($_POST['lname']) || 
        empty($_POST['email']) || empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['passconfirm'])){
            echo "Please fill all the fields";
        }

        else{
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $passconfirm = $_POST['passconfirm'];
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Create Account</title>
    <link rel="stylesheet" href="templates/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body class="grey lighten-4">
    
        <div class="container center login-card" >
            <div class="card white center">
                <div class="card-content">
                    <span class="card-title grey-text">Register</span>
                    <form class = "col s12" action="register.php" method="POST">
                        <div class="form-names">

                            <div class="input-field">
                                <input type="text" name="fname" placeholder="First Name" autocomplete="off" value="<?php echo htmlspecialchars($fname) ?>">
                            </div>

                            <div class="input-field">
                                <input type="text" name="lname" placeholder="Last Name" autocomplete="off" value="<?php echo htmlspecialchars($lname) ?>">
                            </div>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>" autocomplete="off" class="validate">
                        </div>

                        <div class="input-field">
                            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>" autocomplete="off" class="validate">
                        </div>

                        <div class="input-field">
                            <input type="password" name="pass" id="password" placeholder="Pasword" autocomplete="off">
                        </div>

                        <div class="input-field">
                            <input type="password" name="passconfirm" placeholder="Confirm Password" autocomplete="off">
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