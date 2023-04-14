<?php include("../config/dbconnect.php")?>

<html>
<link rel="stylesheet" href="../templates/register.css">
<script src="../js/jquery.js"></script>
<script src="../js/register.js"></script>

<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>
	<div class="form">
		<h2>Regular Customer</h2>
		<form action="register.php" id='register-form' method="post">
			<div id="error"></div>
            <div class="names">
                <div>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
            </div>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<label for="password2">Confirm Password:</label>
			<input type="password" id="password2" name="password2" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>

            <label for="city">Address:</label>
			<input type="text" id="address" name="address" required>

			<label for="city">City:</label>
			<input type="text" id="city" name="city" required>

			<label for="street">Street:</label>
			<input type="text" id="street" name="street" required>

			<label for="zip">ZIP:</label>
			<input type="text" id="zip" name="zip" required>

			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>