<!DOCTYPE html>
<html>

    <?php include("templates/header.php")?>
    <div class="flex-item2">

        <div class="container center login-card" >
            <div class="card white center">
                <div class="card-content">
                    <span class="card-title grey-text">Login</span>
                    <form class = "col s12" action="admin_login.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="center">
                            <input style="margin-top: 20px;"type="submit" name="submit" value="Login" class="btn brand z-depth-0">
                        </div>
                        <span class="center"> <a style="font-size: 12px; margin-top: 10px; display: inline-block; margin-bottom: 50px;" class="grey-text" href="#">Forgot Password?</a></span>
                    </div>
                </div>
            </div>

            
        </div>
            <?php include("templates/footer.php")?>
        
    </div>

</html>