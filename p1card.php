<?php




?>

<div data-role="page" id="p1card">

	<div data-role="header">
		<h1>Player One's cards</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>I have...</h2>
		<?php




		?>

		
	</div>

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