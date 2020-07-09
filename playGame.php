<?php
	 include_once "config.php";
 	?>
<!DOCTYPE html>
<html>
<head>
	<title>The Snake Game</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1 id="welcome"> <?php echo $_POST['name'];?></h1>
	<h1 class = "scoreLable">Your Score</h1>
	<h1 class = "score" name = "score">0</h1>
	<canvas class="canvas" width="400" height="400"></canvas>
	<div class = "gameover">
	<a href="playGame.php"><button class = " mx-auto btn btn-primary btn-lg">Restart Game</button></a>Quit Game? <a href="index.php">Logout</a></div>
	
	<form action="sql.php" method = "POST">
	<button type = "submit">show score</button><br>
	<input id = "pname" type="text" name = "plname">
	<input id = "score" type="text" name = "finalscore">
	</form>
	<script src="js/script.js"></script>
</body>
</html>