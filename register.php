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
                    <form class = "col s12" action="admin_login.php" method="POST">
                        <div class="form-names">

                            <div class="input-field">
                                <input type="text" name="fname">
                                <label for="fname">First Name</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="lname">
                                <label for="lname">Last Name</label>
                            </div>

                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Email" autocomplete="off" class="validate">
                            <label for="email" class="">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="passconfirm">
                            <label for="passconfirm">Confirm Password</label>
                        </div>
                        <div class="center">
                            <input style="margin-top: 20px;"type="submit" name="submit" value="Register" class="btn brand z-depth-0">
                        </div>

                        <div class="grey-text center account-have" style="padding-top: 24px;">
                            Already have an account?<a class="blue-text" href="index.php">  Sign in</a>
                        </div>

                    </div>
                </div>
        </div>

</body>
</html>