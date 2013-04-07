<?php

	
?>


<!DOCTYPE html> 

<?php
 include "foo.php";
	
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

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Settlers of Catan</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Welcome to Catan!</h2>
		
		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	
		
		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a <a href="page-template.html"> single page template</a> that has just one page within it.</p>	
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two" >link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>	

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
		<a href="#build" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">See Best Settlements</a>
	</div>

			<a href="#player4" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous turn</a>
			<a href="#player2" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next turn</a>		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>&copy Sean Miller, Dan Deng</h4>
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
		<a href="#build" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>

			<a href="#player1" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous turn</a>
			<a href="#player3" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next turn</a>		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>&copy Sean Miller, Dan Deng</h4>
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
		<a href="#build" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>

			<a href="#player2" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous turn</a>
			<a href="#player4" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next turn</a>		
	</div><!-- /content -->
<div data-role="footer">
		<h4>&copy Sean Miller, Dan Deng</h4>
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
		<a href="#build" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Build settlements</a>
		<a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop" data-inline="true" data-theme="d">Get trade recommendation</a>
	</div>

			<a href="#player3" data-direction="reverse" data-role="button" data-inline="true" data-icon="arrow-l">Previous turn</a>
			<a href="#player1" data-role="button" data-inline="true" data-theme="b" data-icon="arrow-r">Next turn</a>		
	</div><!-- /content -->
<div data-role="footer">
		<h4>&copy Sean Miller, Dan Deng</h4>
	</div><!-- /footer -->
</div><!-- /page two -->




 <!-- #####################################################################################################################################
 -->



<!-- Start of third page: #popup -->
<div data-role="page" id="recommendation">

	<div data-role="header" data-theme="e">
		<h1>Your recommendation</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">
	<?php

	include	'setup_board1.php';

	?>
			
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
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
<div data-role="page" id="build">

	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

include 'build_form.php'
	?>

		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->




<!-- Start of third page: #popup -->
<div data-role="page" id="build">
	<div data-role="header" data-theme="e">
		<h1>Build settlements</h1>
	</div><!-- /header -->

	<?php

		include 'build_form.php'
	?>
			
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->


</body>
</html>


