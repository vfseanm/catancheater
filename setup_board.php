<?php 


$con=mysqli_connect("localhost","admin","admin","Player");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE players(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), Wood CHAR(30), Bricks CHAR(30), Sheep CHAR(30), Grain CHAR(30), Ore CHAR(30))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table players created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error();
  }


header("location: http://localhost:8888/#player1");

 ?>


