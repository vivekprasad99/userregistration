<?php
 session_start();
 if(!isset($_SESSION['username'])){
 	header('location:login.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<a class="float-right" href="logout.php">Logout</a>
	<h1>welcome <?php echo $_SESSION['username']; ?></h1>
	</div>
</body>
</html>