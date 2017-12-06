<?php
// Variables
$ip = "localhost";
$user = "root";
$pass = "";

// Create db connection
$conn = new mysqli($ip, $user, $pass, "users");

// Validate connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>