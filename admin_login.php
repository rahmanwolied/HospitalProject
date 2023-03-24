<!DOCTYPE html>
<html>

    <?php include("templates/header.php")?>
    <div class="container center login-card">

        <div class="card white">
            <div class="card-content white-text">
                <span class="card-title grey-text ">Login</span>
                <form class="input-field" action="admin_login.php" method="POST">
                    <input type="text" name="email">
                    <label for="email">Email</label>
                    <input type="password" name="password">
                    <label for="password">Password</label>
                    <div class="center">
                        <input type="submit" name="submit" value="Login" class="btn brand z-depth-0">
                    </div>
            </div>

        </div>
    </div>
    <?php include("templates/footer.php")?>

</html>