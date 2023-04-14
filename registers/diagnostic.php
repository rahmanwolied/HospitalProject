<?php include("../config/dbconnect.php")?>

<link rel="stylesheet" href="../templates/register.css">

<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form">
		<h2>Diagnostic Center</h2>
		<form action="register.php" method="post">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>

			<label for="city">Address:</label>
			<input type="text" id="city" name="address" required>

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