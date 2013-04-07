<?php
$con=mysqli_connect("localhost","root","root","catan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="CREATE TABLE players(ID INT NOT NULL AUTO_INCREMENT, Name CHAR(50), PRIMARY KEY(ID), Wood INT, Bricks INT, Sheep INT, Ore INT, Grain INT)";

$sql2 = "CREATE TABLE hexes(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), Name Char(10), Type Char(10), DiceRoll INT, playerID INT)";


// Execute query
 mysqli_query($con,$sql);
 mysqli_query($con,$sql2);

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player1', 1, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player2', 2, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player3', 3, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player4', 4, 0, 0, 0, 0, 0)");
?>