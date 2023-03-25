<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title>Admin Login</title>
        <!-- stylesheet -->
        <link rel="stylesheet" href="templates/style.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>

    <body class="grey lighten-4">
        <div class="container center login-card" >
            <div class="card white center login-card">
                <div class="card-content">
                    <span class="card-title grey-text">Admin</span>
                    <form class = "col s12" action="admin_login.php" method="POST" autocomplete="off">
                        <div class="input-field">
                            <input type="text" name="username" autocomplete="off">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" autocomplete="off">
                            <label for="password">Password</label>
                        </div>
                        <div class="center">
                            <input style="margin-top: 20px;"type="submit" name="submit" value="Login" class="btn brand z-depth-0">
                        </div>
                        <span class="center"> <a style="font-size: 12px; margin-top: 10px; display: inline-block; margin-bottom: 50px;" class="grey-text" href="#">Forgot Password?</a></span>
                    </form>
                </div>

            </div>
        </div>
    
    <div class="footer">
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="index.php">User Login</a>
                </div>
            </div>
        </footer>
    </div>
            
    </body>
</html>