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

mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h1', 'wood', 2, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h2', 'wood', 3, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h3', 'wood', 4, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h4', 'grain', 5, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h5', 'brick', 6, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h6', 'ore', 8, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h7', 'wood', 9, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h8', 'sheep', 10, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h9', 'wood', 11, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h10', 'wood', 12, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h11', 'wood', 1, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h12', 'wood', 2, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h13', 'wood', 3, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h14', 'wood', 4, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h15', 'wood', 5, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h16', 'wood', 6, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h17', 'wood', 8, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h18', 'wood', 9, NULL)");
mysqli_query($con,"INSERT INTO hexes (Name, Type, DiceRoll, playerID)
VALUES ('h19', 'wood', 10, NULL)");



?>