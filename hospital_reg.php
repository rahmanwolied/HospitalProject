
<link rel="stylesheet" href="templates/register.css">
<script src="js/jquery.js"></script>
<script src="js/branch_register.js"></script>

<head>
	<title>Register Form</title>
</head>

<body>
	<div class="form">
		<h2>Hospital</h2>
		<form action="hospital.php" method="post" id='register-form'>
			<div id="error"></div>

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

			<label for="numBranches">How many branches do you have?</label>
			<input type="number" id="numBranches" name="numBranches" value='0' required>

			<div id="branchDivs"> </div>

			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>