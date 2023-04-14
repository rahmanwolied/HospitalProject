<?php include("../config/dbconnect.php")?>

<link rel="stylesheet" href="../templates/register.css">
<script src="../js/jquery.js"></script>
<script src="../js/register.js"></script>

<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form">
		<h2>Hospital</h2>
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

			<label for="branch-no">How many branches do you have?</label>
			<input type="number" id="branch-no" name="branch-no" value='1' required>

			<div id="branchDivs">
				<!-- <div class="branch">
					<div>
						<label for="branch-name">Branch:</label>
						<input type="text" id="branch-name" name="branch-name" required>
					</div>

					<div>
						<label for="branch-city">Address:</label>
						<input type="text" id="branch-city" name="branch-address" required>
					</div>

					<div>
						<label for="branch-city">City:</label>
						<input type="text" id="branch-city" name="branch-city" required>
					</div>

					<div>
						<label for="branch-street">Street:</label>
						<input type="text" id="branch-street" name="branch-street" required>
					</div>

					<div>
						<label for="branch-zip">ZIP:</label>
						<input type="text" id="branch-zip" name="branch-zip" required>
					</div>
				</div> -->
			</div>


			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>