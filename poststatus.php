<?php
	include "db.php";
	session_start();
	$status = $_POST["status"];
	$id = $_SESSION['id'];

	if(isset($_POST["status"])) {
		$sql = "INSERT INTO status (msg, userID) VALUES ('".$status."', ".$id.")";
		$res = mysqli_multi_query($conn, $sql);
		echo '<script type="text/javascript">window.location.href="status.php";</script>';
	 }
?>