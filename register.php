<?php
	include "db.php";
	$user = $_POST["username"];
	$user = $conn->real_escape_string($user);
	$pass = $_POST["password"];
	$pass = $conn->real_escape_string($pass);
	$pass2 = $_POST["password2"];
	$pass2 = $conn->real_escape_string($pass2);

	$sql = "SELECT * FROM users WHERE `username` = '$user'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "The username already exists";
	}
	else {
		if ($pass == $pass2) {
			$sql = "INSERT INTO users (username, password)
			VALUES ('$user', '$pass')";

			if ($conn->query($sql)) {
				echo "You have been registered!";
				echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2000);</script>";
			}
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2000);</script>";
			}
		}
		else {
			echo "The two passwords doesn't match";
			echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2000);</script>";
		}
	}

	mysqli_close($conn);
?>