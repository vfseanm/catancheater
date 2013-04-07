
<?php 
$resource = $_GET['resource'];
$diceroll = $_GET['diceroll'];
$hex= $_GET['hex'];

$con=mysqli_connect("localhost","root","root","catan");

mysqli_query($con,"INSERT INTO hexes (Type, DiceRoll)
VALUES ('$resource', '$diceroll')");

header("location: localhost:3000/#main");

 ?>




