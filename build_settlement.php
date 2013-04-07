<?php

$hex1 = $_GET['first'];
$hex2 = $_GET['second'];
$hex3 = $_GET['third'];
$portID = 0;
$player_id = $_GET['playerID'];

echo $hex1;

// Create connection
$con=mysqli_connect("localhost", "root", "root", "catan");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// ************************************** first hex
$result1 = mysqli_query($con, "SELECT * FROM hexes WHERE Name='$hex1'");

while($row = mysqli_fetch_array($result1)){

	$type = $row['Type'];
	$diceNumber = $row['DiceRoll'];
}


mysqli_query($con, "INSERT INTO hexes(Name, Type, DiceRoll, playerID) VALUES ('$hex1', '$type', '$diceNumber', '$player_id')");

// ************************************** second hex
$result1 = mysqli_query($con, "SELECT * FROM hexes WHERE Name='$hex2'");

while($row = mysqli_fetch_array($result1)){

	$type = $row['Type'];
	$diceNumber = $row['DiceRoll'];
}


mysqli_query($con, "INSERT INTO hexes(Name, Type, DiceRoll, playerID) VALUES ('$hex2', '$type', '$diceNumber', '$player_id')");

// ************************************** third hex
$result1 = mysqli_query($con, "SELECT * FROM hexes WHERE Name='$hex3'");

while($row = mysqli_fetch_array($result1)){

	$type = $row['Type'];
	$diceNumber = $row['DiceRoll'];
}


mysqli_query($con, "INSERT INTO hexes(Name, Type, DiceRoll, playerID) VALUES ('$hex3', '$type', '$diceNumber', '$player_id')");



?>