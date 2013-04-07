<?php

$hex1 = $_GET['1st-select'];
$hex2 = $_GET['2nd-select'];
$hex3 = $_GET['3rd-select'];
$portID = 0;
$player_id = $_GET['playerID'];

// Create connection
$con=mysqli_connect("localhost", "root", "root", "catan");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "INSERT INTO Settlements (playerID, portID, hex1ID, hex2ID, hex3ID) VALUES ("
	$query = $query.$player_id.", ".$portID.", ".$hex1.", ."$hex2.", ".$hex3.")";

mysqli_query($con, $query);

?>