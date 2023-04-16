<?php include("../config/dbconnect.php")?>

<link rel="stylesheet" href="../templates/register.css">
<script src="../js/jquery.js"></script>
<script src="../js/register.js"></script>

<head>
	<title>Register Form</title>
</head>

<body>
	<div class="form">
		<h2>Diagnostic Center</h2>
		<form action="register.php" method="post" id="register-form">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

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

			<label for="address">Address:</label>
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