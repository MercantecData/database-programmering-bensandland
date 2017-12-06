<?php
	session_start();
	include "db.php";
	$user = $_POST["username"];
	$pass = $_POST["password"];

	$sql = "SELECT * FROM users WHERE `username` = '$user'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if($row["username"] == $user && $row["password"] == $pass)
			{
				echo "You are currently logged in as: " . $row["username"];
				$_SESSION["id"] = $row["id"];
				header( "Location: index.php" );
			} else {
				echo "Invalid username or password!";
				header( "Location: loginpage.php" );
			}
		}
	} else {
		echo "Invalid username or password!";
	}

	mysqli_close($conn);	
?>