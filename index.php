<!DOCTYPE html>
<html>

    <?php include("templates/header.php")?>

    <section class="white container grey-text">
        <h4 class="center">Login</h4>
        <form class="white" action="login.php" method="POST">
            <label>Your Email</label>
            <input type="text" name="email">
            <label>Your Password</label>
            <input type="password" name="password">
            <div class="center">
                <input type="submit" name="submit" value="Login" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include("templates/footer.php")?>

</html>