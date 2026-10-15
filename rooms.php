<?php
    include('includes/lock.php');
    include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
	<title>Login Sample</title>
</head>
<style type="text/css">
	*{
		font-family: arial;
	}
	a{
		font-size: 8pt;
	}
</style>
<body>
<div class="container mt-4">
	<h1>Welcome to ROOMS page!</h1> 

	<?php
	echo $_SESSION['accesslevel']; echo " | ";
	echo $_SESSION['username']; echo " ";
	?>
	<a href="includes/logout.php">Log-out</a>
	<br/>
	<a href="main.php">HOME</a> | 
	<a href="booking.php">BOOKING</a> | 
	<a href="#">ROOMS</a>
	<?php
	echo "<br/>";
	if($_SESSION['accesslevel']=='admin'){
		echo "<p>Display/Access All</p>";
	}else{//user
		echo "<p>Display Few</p>";
	}
	?>
</div>
</body>
</html>