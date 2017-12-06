<?php
	include "db.php";
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$pass2 = $_POST["password2"];

	$sql = "SELECT * FROM users WHERE `username` = '$user'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "The username already exists";
	}
	else {
		if ($pass == $pass2) {
			$sql = "INSERT INTO users (username, password)
			VALUES ('$user', '$pass')";

			if ($conn->query($sql) === TRUE) {
				echo "<script type='text/javascript'>";
				echo "alert('User has been successfully created')";
				echo "</script>";
				header( "Location: loginpage.php" );
			}
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else {
			echo "The two passwords doesn't match";
		}
	}

	mysqli_close($conn);
?>