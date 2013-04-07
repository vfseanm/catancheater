<?php
public $resourceArray = array();
public $vertArray = array();

$con=mysqli_connect("localhost","root","root","catan");

// Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM hexes");

	while($row = mysqli_fetch_array($result)){
		
		echo $row['Type'] . " " . $row['DiceRoll'];
		echo "<br />";
		$resource1 = new Resources;
		$resource1->number = $row['DiceRoll'];
		$resource1->resource = $row['Type'];
		$resource1->hexName = $row['Name'];
		$resource1->player = $row['playerID'];
		if (in_array($resource1->hexName, $resourceArray) && in_array($resource1->player, $resourceArray)){
			resourceArray[] =  $resource1;
		}
	}


function resourceList(){

	// for($i=1; $i<20; $i++){

	// 	$resource = new Resources;

	// 	//printf("Enter the roll value for %s\n", $squareNumber);
	// 	$resource->number = $_GET["slider-a1"];
			
	// 	//printf("Enter the resource value for %s\n", $squareNumber);
	// 	$resource->resource = $_GET["select-choice-a1"];	
	// 	$resourceArray[i-1] = $resource;
	// }
	
	public $vertecies;
	$numberMap = array(2=>1, 3=>2, 4=>3, 5=>4, 6=>5, 8=>5, 9=>4, 10=>3, 11=>2, 12=>1);

	$vertArray[0] = array($numberMaps[resourceArray[0]->number], 0);
	$vertArray[1] = array($numberMaps[resourceArray[0]->number], 1);
	$vertArray[2] = array($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number], 2);
	$vertArray[3] = array($numberMaps[resourceArray[1]->number], 3);
	$vertArray[4] = array($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[1]->number], 4);
	$vertArray[5] = array($numberMaps[resourceArray[2]->number], 5);
	$vertArray[6] = array($numberMaps[resourceArray[2]->number], 6);

	$vertArray[7] = ($numberMaps[resourceArray[3]->number], 7);
	$vertArray[8] = ($numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[0]->number], 8);
	$vertArray[9] = ($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[4]->number], 9);
	$vertArray[10] = ($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number]+ $numberMaps[resourceArray[4]->number], 10);
	$vertArray[11] = ($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[5]->number], 11;
	$vertArray[12] = ($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[2]->number]+ $numberMaps[resourceArray[5]->number], 12);
	$vertArray[13] = ($numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[6]->number], 13);
	$vertArray[14] = ($numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[6]->number], 14);
	$vertArray[15] = ($numberMaps[resourceArray[6]->number], 15);

	$vertArray[16] = ($numberMaps[resourceArray[7]->number], 16);
	$vertArray[17] = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number], 17);
	$vertArray[18] = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[8]->number], 18);
	$vertArray[19] = ($numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[8]->number], 19);
	$vertArray[20] = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[9]->number], 20);
	$vertArray[21] = ($numberMaps[resourceArray[4]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[9]->number], 21);
	$vertArray[22] = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[10]->number], 22);
	$vertArray[23] = ($numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[10]->number], 23);
	$vertArray[24] = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[11]->number], 24);
	$vertArray[25] = ($numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[6]->number], 25);
	$vertArray[26] = ($numberMaps[resourceArray[11]->number], 26);

	$vertArray[27] = ($numberMaps[resourceArray[7]->number], 27);
	$vertArray[28] = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[12]->number], 28);
	$vertArray[29] = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[8]->number]+ $numberMaps[resourceArray[12]->number], 29);
	$vertArray[30] = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[12]->number]+ $numberMaps[resourceArray[13]->number], 30);
	$vertArray[31] = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[9]->number]+ $numberMaps[resourceArray[13]->number], 31);
	$vertArray[32] = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[14]->number], 32);
	$vertArray[33] = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number], 33);
	$vertArray[34] = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[15]->number], 34);
	$vertArray[35] = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[11]->number]+ $numberMaps[resourceArray[15]->number], 35);
	$vertArray[36] = ($numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[15]->number];
	$vertArray[37] = ($numberMaps[resourceArray[11]->number], 36);

	$vertArray[38] = ($numberMaps[resourceArray[12]->number], 38);
	$vertArray[39] = ($numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[16]->number], 39);
	$vertArray[40] = ($numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[16]->number], 40);
	$vertArray[41] = ($numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[16]->number]+ $numberMaps[resourceArray[17]->number], 41);
	$vertArray[42] = ($numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[17]->number], 42);
	$vertArray[43] = ($numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[17]->number]+ $numberMaps[resourceArray[18]->number], 43);
	$vertArray[44] = ($numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[18]->number]+ $numberMaps[resourceArray[15]->number], 44);
	$vertArray[45] = ($numberMaps[resourceArray[15]->number] + $numberMaps[resourceArray[18]->number], 45);
	$vertArray[46] = ($numberMaps[resourceArray[15]->number], 46);

	$vertArray[47] = ($numberMaps[resourceArray[16]->number], 47);
	$vertArray[48] = ($numberMaps[resourceArray[16]->number], 48);
	$vertArray[49] = ($numberMaps[resourceArray[16]->number] + $numberMaps[resourceArray[17]->number], 49);
	$vertArray[50] = ($numberMaps[resourceArray[17]->number], 50);
	$vertArray[51] = ($numberMaps[resourceArray[17]->number] + $numberMaps[resourceArray[18]->number], 51);
	$vertArray[52] = ($numberMaps[resourceArray[18]->number], 52);
	$vertArray[53] = ($numberMaps[resourceArray[18]->number], 53);

	// for($i=0; $i<54; $i++){
	// 	$var = '$v' + strval(i);
	// 	$vertArray[i] = eval($var);
	// }
	array_multisort($vertArray[0], SORT_DESC, SORT_NUMERIC, $vertArray[1], SORT_NUMERIC, SORT_DESC);

	for($k=0; $k<11; $k++){
		echo $vertArray[k][0];
	}
}

resourceList();	
mysqli_close($con);
?>