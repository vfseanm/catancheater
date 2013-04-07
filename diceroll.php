<?php
$con=mysqli_connect("localhost","root","root","catan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$thisroll = $_GET['diceroll'];
$thisroll = intval($thisroll);
$result = mysqli_query($con,"SELECT * FROM hexes WHERE DiceRoll ='$thisroll'");


while($row = mysqli_fetch_array($result))
  {
  	$playerID = $row['playerID'];
  	echo $playerID;
  	$playerID = intval($playerID);
  	$resourceType = $row['Type'];
  	echo $resourceType;
  	mysqli_query($con,"UPDATE players SET $resourceType=$resourceType+1
	WHERE ID=$playerID");

  }


mysqli_close($con);

header("location: localhost:3000/#player1");



?>