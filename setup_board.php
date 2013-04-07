
<?php 
$resource = $_GET['resource'];
$diceroll = $_GET['diceroll'];
$hex= $_GET['hex'];

echo $resource;
$con=mysqli_connect("localhost","root","root","catan");

mysqli_query($con,"INSERT INTO hexes (ID, Type, DiceRoll, Sheep, Ore, Grain)
VALUES ('Player1', 1, 0, 0, 0, 0, 0)");



// header("location: http://localhost:8888/#main");

 ?>




