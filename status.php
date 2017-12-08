<?php
	session_start();
	
	if(!(isset($_SESSION["username"]) && $_SESSION["id"])) {
    echo '<script type="text/javascript">window.location.href="./loginpage.php";</script>';
	}

	include "db.php";

	$ID = $_SESSION['id'];

	if(isset($_GET["id"])) {
		if($_GET["id"] == "all") {
			$sql = "SELECT users.username, status.msg FROM status INNER JOIN users ON users.ID=status.userID ORDER BY status.ID DESC";
		} else {
			$sql = "SELECT users.username, status.msg FROM status INNER JOIN users ON users.ID=status.userID WHERE status.userID = '".$_GET["id"]."' ORDER BY status.ID DESC";
		}
	} 
	else {
		$sql = "SELECT users.username, status.msg FROM status INNER JOIN users ON users.ID=status.userID WHERE status.userID = '".$_SESSION["id"]."' ORDER BY status.ID DESC";
	}

	$statusQuery = $conn->query($sql);
	if(!$statusQuery){
		echo '<script type="text/javascript">window.location.href="./status.php";</script>';
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Status updates
		</title>

		<!-- My StyleSheet -->
		<link rel="stylesheet" href="css/forms.css">

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

		<!-- For proper rendering and touch-support -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<body>
	<div class="container">
					<p class="text-right">You are currently logged in as: <?= $_SESSION["username"]; ?></p>

		<div class="jumbotron text-center">
			<h2 class="jumbotron-heading">Status updates</h2>
			<div class="form">			
			<form class="form-horizontal no-margin" action="poststatus.php" method="POST">
				<div class="form-group">
					<div class="col-sm-10">
						<input class="form-control" type="text" name="status" id="statusTxt" placeholder="Enter your update here"><br>
						<div class="container">
			                <?php while($row = mysqli_fetch_array($statusQuery)) { //Posts all of the status updates. ?>
		                        <div class="status">
		                            <h4> <?= $row["username"];?> </h4>
		                            <a> <?= $row["msg"]; ?></a>
		                            <hr>                    
		                        </div>
	                		<?php } ?>
						</div><br>
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="submitStatus">Submit</button>
					</div>
				</div>
			</form>
			</div>		
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