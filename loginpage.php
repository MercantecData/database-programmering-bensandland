<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="main">
		<div id="">
			<h2>Login:</h2>
			<form action="login.php" method="POST">
				User: <input type="text" name="username" required>
				Pass: <input type="password" name="password" required>
				<input type="submit" value="Login">
			</form>
		</div>

		<div id="">
			<h2>Sign up:</h2>
			<form action="register.php" method="POST">
				User: <input type="text" name="username" required> <br>
				Pass: <input type="password" name="password" required> <br>
				Confirm pass: <input type="password" name="password2" required> <br>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>

	<br><br><br>
	<form action="logout.php">
		<input type="submit" value="Logout">
	</form>
</body>
</html>