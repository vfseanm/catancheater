<?php
$con=mysqli_connect("localhost","root","root","catan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="CREATE TABLE players(Name CHAR(50), ID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID), Wood INT, Bricks INT, Sheep INT, Ore INT, Grain INT)";

$sql1 = "CREATE TABLE settlements(ID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID), playerID INT, portID INT, hex1ID INT, hex2ID INT, hex3ID INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error();
  }

  mysqli_query($con,$sql1);

  mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player1', 1, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player2', 2, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player3', 3, 0, 0, 0, 0, 0)");

mysqli_query($con,"INSERT INTO players (Name, ID, Wood, Bricks, Sheep, Ore, Grain)
VALUES ('Player4', 4, 0, 0, 0, 0, 0)");

header("location: http://localhost:8888/#player1");
?>