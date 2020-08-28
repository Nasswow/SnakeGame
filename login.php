<?php
	include_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Snake Game</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class= "playArea">
		<h1 class = "registerLable">Register to Play</h1>
		<form id = "form" action="playGame.php" method="post">
			USERNAME: <input class = "info" type="text" name= "uid" placeholder = "Your Username"><br>
			PASSWORD: <input class = "info" type="password" name= "password" placeholder = "Your Password"><br>
			<div class="gameover">
			<button id = "loginBtn" class = "mx-auto btn btn-primary btn-lg" type = "submit">Login</button> Not a member? <a href="index.php">Register</a></div>
		</form>
	</div>
	<script src="js/script.js"></script>
</body>
</html>