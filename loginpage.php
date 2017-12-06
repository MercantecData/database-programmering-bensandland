<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<!-- My StyleSheet -->
	<link rel="stylesheet" href="css/signin.css">

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- For proper rendering and touch-support -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="container">
			<form class="form-signin" action="login.php" method="POST">
				<h2 class="form-signin-heading">Login:</h2>
				<input class="form-control" type="text" placeholder="Username" name="username" required>
				<input class="form-control" type="password" placeholder="Password" name="password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
			</form>

			
			<form class="form-signin" action="register.php" method="POST">
				<h2 class="form-signin-heading">Sign up:</h2>
				<input class="form-control" type="text" placeholder="Username" name="username" required>
				<input class="form-control" type="password" placeholder="Password" name="password" required>
				<input class="form-control" type="password" placeholder="Confirm password" name="password2" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign up</button>
			</form>
		</div>
	</div>

	<!-- Bootstrap libraries, placed at bottom to make page load faster -->

	<!-- jQuery lib -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>