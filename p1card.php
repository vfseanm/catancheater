<?php




?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Multi-page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 
<body>
<div data-role="page" id="p1card">

	<div data-role="header">
		<h1>Player One</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>I have...</h2>
		<img src = "wood.png">
		<?php
		$con=mysqli_connect("localhost","root","root","catan");
		$result = mysqli_query($con,"SELECT * FROM players WHERE ID =1");
		while($row = mysqli_fetch_array($result))
  			{
  		    echo "Wood: ";
  		    echo $row['Wood'];
  		    echo "<br>";
  			}
  		mysqli_close($con);	
		?>
		<img src = "sheep.png">
		<?php
		$con=mysqli_connect("localhost","root","root","catan");
		$result = mysqli_query($con,"SELECT * FROM players WHERE ID =1");
		while($row = mysqli_fetch_array($result))
  			{
  		    echo "Sheep: ";
  		    echo $row['Sheep'];
  		    echo "<br>";
  			}
  		mysqli_close($con);	
		?>
		<img src = "grain.png">
		<?php
		$con=mysqli_connect("localhost","root","root","catan");
		$result = mysqli_query($con,"SELECT * FROM players WHERE ID =1");
		while($row = mysqli_fetch_array($result))
  			{
  		    echo "Grain: ";
  		    echo $row['Grain'];
  		    echo "<br>";
  			}
  		mysqli_close($con);	
		?>
		<img src = "bricks.png">
		<?php
		$con=mysqli_connect("localhost","root","root","catan");
		$result = mysqli_query($con,"SELECT * FROM players WHERE ID =1");
		while($row = mysqli_fetch_array($result))
  			{
  		    echo "Bricks: ";
  		    echo $row['Bricks'];
  		    echo "<br>";
  			}
  		mysqli_close($con);	
		?>

	</div>


	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->

</body>

</html>

