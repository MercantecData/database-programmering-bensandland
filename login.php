<?php
	session_start();
	include "db.php";
	$user = $_POST["username"];
	$user = $conn->real_escape_string($user);
	$pass = $_POST["password"];
	$pass = $conn->real_escape_string($pass);

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
				echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2000);</script>";
			}
		} 
		else {
			echo "Invalid username or password!";
			echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2000);</script>";
		}
	}

	mysqli_close($conn);	
?>