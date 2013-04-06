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
		
		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	
		
		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a <a href="page-template.html"> single page template</a> that has just one page within it.</p>	
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two" >link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>	

		<h3>Start game:</h3>
		<p><a href="#main" data-role="button">Set up game</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->


<!-- Start of second page: #main -->
<div data-role="page" id="main" data-theme="a">

	<div data-role="header">
		<h1>This is Seans Page</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Set up the games</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#player1" data-role="button">Start game</a></p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to Home</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->

<!-- Start player one page: #player1 -->
<div data-role="page" id="player1" data-theme="a">

	<div data-role="header">
		<h1>It is player 1's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Player 1</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="slider" id="slider" value="6" min="0" max="12"  />
		</div>
		<p><a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop">Get trade recommendation</a></p>
			<a href="#one" data-direction="reverse" data-role="button" data-inline="true" data-theme="b">Previous turn</a>
			<a href="#player2" data-role="button" data-inline="true">Next turn</a>
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->
<!-- Start player one page: #player2 -->
<div data-role="page" id="player2" data-theme="a">

	<div data-role="header">
		<h1>It is player 2's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Player 2</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="slider" id="slider" value="6" min="0" max="12"  />
		</div>
		<p><a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop">Get trade recommendation</a></p>
		<a href="#player1" data-direction="reverse" data-role="button" data-inline="true" data-theme="b">Previous turn</a>
	    <a href="#player3" data-role="button" data-inline="true">Next turn</a>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- #####################################################################################################################################
 -->
<div data-role="page" id="player3" data-theme="a">

	<div data-role="header">
		<h1>It is player 3's turn</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Player 3</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<div data-role="fieldcontain">
		   <label for="slider">Dice Roll:</label>
		   <input type="range" name="slider" id="slider" value="6" min="0" max="12"  />
		</div>
		<p><a href="#recommendation" data-role="button" data-rel="dialog" data-transition="pop">Get trade recommendation</a></p>
		<a href="#player2" data-direction="reverse" data-role="button" data-inline="true" data-theme="b">Previous turn</a>
	    <a href="#player4" data-role="button" data-inline="true">Next turn</a>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
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
		<h2>Trade Player Two three wood for five sheep </h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

</body>
</html>


