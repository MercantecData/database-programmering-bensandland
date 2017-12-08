<?php
	session_start();
	session_destroy();
	echo "You have been logged out! Redirecting..";
	echo "<script>setTimeout(\"location.href = '/loginpage.php';\",2200);</script>";

?>