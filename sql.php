<?php
session_start();
include_once "config.php";
$playername = $_POST['name'];
$playeruid = $_POST['username'];
$playeremail = $_POST['email'];
$playerpassword = md5($_POST['password']);
$score = $_POST['finalscore'];
$yourname = $_POST['plname'];

$createTable = "CREATE TABLE SnakeTable(
 ID INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 playerName CHAR(255) NOT NULL,
 userName CHAR(255) NOT NULL,
 email CHAR(255),
 pwd CHAR(255) NOT NULL
)";

$userReg = "INSERT INTO SnakeTable(playerName, userName, email, pwd)
VALUES('$playername', '$playeruid', '$playeremail', '$playerpassword')";
 mysqli_query($conn, $userReg);
 echo $playername;
 echo $score;
?>
<h1>You seccessfully Registered.</h1>
<a href="playGame.php"><button style = "padding: 10px;">Start Game</button></a>