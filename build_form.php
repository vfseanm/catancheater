<div data-role="content" data-theme="d">	
		<form action="build_settlement.php" method="get" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
		<fieldset>
		

		<label for="1st-select" class="select">1st Bordering Hex</label>
			<select id="1st_select">
   				<option value="1">H1</option>
   				<option value="2">H2</option>
   				<option value="3">H3</option>
   				<option value="4">H4</option>
   				<option value="5">H5</option>
   				<option value="6">H6</option>
   				<option value="7">H7</option>
   				<option value="8">H8</option>
			</select>
			<label for="2nd-select" class="select">2nd Bordering Hex</label>
			<select  id="2nd-select">
   				<option value="1">H1</option>
   				<option value="2">H2</option>
   				<option value="3">H3</option>
   				<option value="4">H4</option>
   				<option value="5">H5</option>
   				<option value="6">H6</option>
   				<option value="7">H7</option>
   				<option value="8">H8</option>

			</select>
			<label for="3rd-select" class="select">3rd Bordering Hex</label>
			<select id="3rd-select">
   				<option value="1">H1</option>
   				<option value="2">H2</option>
   				<option value="3">H3</option>
   				<option value="4">H4</option>
   				<option value="5">H5</option>
   				<option value="6">H6</option>
   				<option value="7">H7</option>
   				<option value="8">H8</option>
			</select>
         <br />
         <input type="hidden" name="playerID" value="1">
			<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
	</fieldset>
	</form>
