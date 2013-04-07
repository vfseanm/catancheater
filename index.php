<?php

	
?>


<!DOCTYPE html> 

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

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Settlers of Catan</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Welcome to Catan!</h2>

		<p>Never lose another game! </p>	
		<p>This app allows you track your opponent's cards, and shows you the best places to make settlements</p>	
		
		

		<h3>Start game:</h3>
	<form action="create.php" method="get">
		<button type="submit" data-theme="b" onclick="goToSetUp()" name="submit" value="submit-value">Set up game</button>
	</form>

	<script>


	function goToSetUp(){
	window.location = "/#main"
	}

	</script>

	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->


<!-- Start of second page: #main -->
<div data-role="page" id="main" data-theme="b">
<?php
 include "setup-board-display.php";
	
?>
	

</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->

<!-- Start player one page: #player1 -->
<div data-role="page" id="player1" data-theme="">

	<div data-role="header">

		<h1>Player 1's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="b">	
		<h2>Player 1</h2>

	</div><!-- /header -->

	<div data-role="content" data-theme="b">	

	<form action="diceroll.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>

		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="diceroll" id="slider" value="6" min="0" max="12"  />
		</div>
		<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
	</fieldset>
	</form>
		
	<div>
		<a href="#build1" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">See Best Settlements</a>
	</div> 
			<a href="/p1card.php" data-theme = 'e' data-role="button">See my cards</a>
			<a href="#player4" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous</a>
			<a href="#player2" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next</a>		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>&copy 2013</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->
<!-- Start player one page: #player2 -->
<div data-role="page" id="player2" data-theme="b">

	<div data-role="header">
		<h1>Player 2's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="b">	
		<h2>Player 2</h2>
		<p><a href="#map" data-role="button" data-rel="dialog" data-transition="pop">Map Reference</a></p>

	</div><!-- /header -->

	<div data-role="content" data-theme="b">	

	<form action="diceroll2.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>

		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="diceroll" id="slider" value="6" min="0" max="12"  />
		</div>
		<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
	</fieldset>
	</form>
	<div>
		<a href="#build2" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>
			<a href="/p2card.php" data-theme = 'e' data-role="button">See my cards</a>
			<a href="#player1" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous</a>
			<a href="#player3" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next</a>		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>&copy 2013</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->
<div data-role="page" id="player3" data-theme="b">
	<div data-role="header">

		<h1>Player 3's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="b">	
		<h2>Player 3</h2>
		<p><a href="#map" data-role="button" data-rel="dialog" data-transition="pop">Map Reference</a></p>

	</div><!-- /header -->

	<div data-role="content" data-theme="b">	

	<form action="diceroll3.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>

		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="diceroll" id="slider" value="6" min="0" max="12"  />
		</div>
		<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
	</fieldset>
	</form>
	<div>
		<a href="#build3" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>

			<a href="#player2" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous</a>
			<a href="#player4" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next</a>		
	</div><!-- /content -->
<div data-role="footer">
		<h4>&copy 2013</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

 <!-- #####################################################################################################################################
 -->
<div data-role="page" id="player4" data-theme="b">
	<div data-role="header">

		<h1>Player 4's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="b">	
		<h2>Player 4</h2>
		<p><a href="#map" data-role="button" data-rel="dialog" data-transition="pop">Map Reference</a></p>

	</div><!-- /header -->

	<div data-role="content" data-theme="b">	

	<form action="diceroll4.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>

		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="diceroll" id="slider" value="6" min="0" max="12"  />
		</div>
		<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
	</fieldset>
	</form>
	<div>
		<a href="#build4" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>

			<a href="#player3" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous</a>
			<a href="#player1" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next</a>		
	</div><!-- /content -->
<div data-role="footer">
		<h4>&copy 2013</h4>
	</div><!-- /footer -->
</div><!-- /page two -->




 <!-- #####################################################################################################################################
 -->



<!-- Start of third page: #popup -->
<div data-role="page" id="recommendation">

	<div data-role="header" data-theme="e">
		<h1>Settlement Ranking:</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">
	<?php

	include	'setup_board1.php';

	?>
			
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page popup -->



<!-- #####################################################################################################################################
 -->

<!-- Start of third page: #popup -->
<div data-role="page" id="map">

	<div data-role="header" data-theme="e">
		<h1>Map Reference</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<p>Map goes here!</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- #####################################################################################################################################
 -->
</body>
</html>

 <!-- #####################################################################################################################################
 -->
<!-- Start of third page: #popup -->
<div data-role="page" id="build1">

	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

		include 'build_form_player1.php'
	?>
	
	
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page popup -->




<!-- Start of third page: #popup -->
<div data-role="page" id="build2">
	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

		include 'build_form_player2.php'
	?>

			
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of third page: #popup -->
<div data-role="page" id="build3">
	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

		include 'build_form_player3.php'
	?>

			
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of third page: #popup -->
<div data-role="page" id="build4">
	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

		include 'build_form_player4.php'
	?>

			
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page popup -->


</body>
</html>


