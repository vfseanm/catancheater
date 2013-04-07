<!-- Start of first page: #one -->

<?php 



?>


	<div data-role="header">
		<h1>Catan Cheater</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Board Setup</h2>

<form action="setup_board.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>
		<label for="hex" class="select">Hex:</label>
			<select name = "hex" id = "hex" >
   				<option value="h1">H1</option>
   				<option value="h2">H2</option>
   				<option value="h3">H3</option>
   				<option value="h4">H4</option>
      			<option value="h5">H5</option>
      			<option value="h6">H6</option>
      			<option value="h7">H7</option>
      			<option value="h8">H8</option>
      			<option value="h9">H9</option>
      			<option value="h10">H10</option>
      			<option value="h11">H11</option>
      			<option value="h12">H12</option>
      			<option value="h13">H13</option>
      			<option value="h14">H14</option>
      			<option value="h15">H15</option>
      			<option value="h16">H16</option>
      			<option value="h17">H17</option>
      			<option value="h18">H18</option>
      			<option value="h19">H19</option>
		</select>
		
		<label for="resource" class="select">Resource:</label>
			<select name = "resource" id = "resource" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll">Number</label>
		<input type="range" name = "diceroll" id="diceroll" value="7" min="0" max="12" />

		<!-- <h3>H2:</h3>	
		<label for="resource-h2" class="select">Resource:</label>
			<select id = "resource-h2" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h2">Number</label>
		<input type="range"  id="diceroll-h2" value="7" min="0" max="12" />

			<h3>H3:</h3>	
		<label for="resource-h3" class="select">Resource:</label>
			<select id = "resource-h3" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h3">Number</label>
		<input type="range"  id="diceroll-h3" value="7" min="0" max="12" />

			<h3>H4:</h3>	
		<label for="resource-h4" class="select">Resource:</label>
			<select id = "resource-h4" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h4">Number</label>
		<input type="range"  id="diceroll-h4" value="7" min="0" max="12" />

			<h3>H5:</h3>	
		<label for="resource-h5" class="select">Resource:</label>
			<select id = "resource-h5" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h5">Number</label>
		<input type="range"  id="diceroll-h5" value="7" min="0" max="12" />

			<h3>H6:</h3>	
		<label for="resource-h6" class="select">Resource:</label>
			<select id = "resource-h5" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h6">Number</label>
		<input type="range"  id="diceroll-h6" value="7" min="0" max="12" />

			<h3>H7:</h3>	
		<label for="resource-h7" class="select">Resource:</label>
			<select id = "resource-h7" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h7">Number</label>
		<input type="range"  id="diceroll-h7" value="7" min="0" max="12" />

			<h3>H8:</h3>	
		<label for="resource-h8" class="select">Resource:</label>
			<select id = "resource-h8" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h8">Number</label>
		<input type="range"  id="diceroll-h8" value="7" min="0" max="12" />

			<h3>H9:</h3>	
		<label for="resource-h9" class="select">Resource:</label>
			<select id = "resource-h9" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h9">Number</label>
		<input type="range"  id="diceroll-h9" value="7" min="0" max="12" />

			<h3>H10:</h3>	
		<label for="resource-h10" class="select">Resource:</label>
			<select id = "resource-h7" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h10">Number</label>
		<input type="range"  id="diceroll-h10" value="7" min="0" max="12" />

			<h3>H11:</h3>	
		<label for="resource-h11" class="select">Resource:</label>
			<select id = "resource-h11" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h11">Number</label>
		<input type="range"  id="diceroll-h11" value="7" min="0" max="12" />

				<h3>H12:</h3>	
		<label for="resource-h12" class="select">Resource:</label>
			<select id = "resource-h12" >
   				<option value="wood">Wood</option>
   				<option value="sheep">Sheep</option>
   				<option value="grains">Grain</option>
   				<option value="ore">Ore</option>
      			<option value="brick">Brick</option>
			</select>
		<label for="diceroll-h12">Number</label>
		<input type="range"  id="diceroll-h12" value="7" min="0" max="12" /> -->

		<script>

			function goToSetUp(){
			window.location = "/#main"
			}

		</script>

		<button type="submit" data-theme="b" name="submit" value="submit-value" onclick = "goToSetUp()">Save</button>
		<p><a href="#player1" data-role="button">Start game</a></p>	
	</fieldset>
	</form>



	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->







