<?php 
	include("../config/dbconnect.php");

	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);

		$sql = "SELECT * FROM customers WHERE c_id = '$username'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			echo 'Username already exists';
		} else{
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$numBranches = $_POST['numBranches'];

			for($i = 0 ; $i < $numBranches ; $i++){
				$username = mysqli_real_escape_string($conn, $_POST['username']);
				$branch = mysqli_real_escape_string($conn, $_POST['branches'][$i]);
				$address = mysqli_real_escape_string($conn, $_POST['addresses'][$i]);
				$city = mysqli_real_escape_string($conn, $_POST['cities'][$i]);
				$street = mysqli_real_escape_string($conn, $_POST['streets'][$i]);
				$zip = mysqli_real_escape_string($conn, $_POST['zips'][$i]);

				$sql = "INSERT INTO branches (c_id, branch, address, city, street, zip) VALUES ('$username', '$branch', '$address', '$city', '$street', '$zip')";
				if(!mysqli_query($conn, $sql)){
					echo 'Error: ' . mysqli_error($conn);
				}
			}

			$sql = "INSERT INTO customers (C_ID, password, name, email, phone, discount) VALUES ('$username', '$password', '$name', '$email', '$phone', 10)";

			if(mysqli_query($conn, $sql)){
				echo 1;
			} else{
				echo 'Error: ' . mysqli_error($conn);
			}
		}

	}
?>
