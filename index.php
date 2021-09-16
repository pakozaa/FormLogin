<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	session_start();
	if(!isset($_SESSION["Username"])){
		header("Location:login.php");
	}
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<div><h1>User : <?php echo($_SESSION["Username"]);?></h1></div>
		<div><a href="login.php" onclick="<?php session_destroy();?>">Logout</a></div>
	</center>
</body>
</html>