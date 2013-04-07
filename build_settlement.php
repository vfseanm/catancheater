<?php 

// Create connection
$con=mysqli_connect("localhost","admin","admin","Player");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


mysqli_query($con, "INSERT INTO Settlements (PortID, hex1ID INT, hex2ID INT, hex3ID INT)
VALUES ('Sean Miller', 12, 35)");

mysqli_close($con);

#header("location: http://localhost:8888/#player1");

 ?>