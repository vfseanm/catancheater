<?php

include 'Resources.php';



$resourceArray=array();

$con=mysqli_connect("localhost", "root", "root","catan");

// Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con, "SELECT * FROM hexes");

$resourcesPutIn=array();

	while($row = mysqli_fetch_array($result)){
		
		$resource1 = new Resources; 
		$resource1->number = $row['DiceRoll'];
		$resource1->resource = $row['Type'];
		$resource1->hexName = $row['Name'];
		$resource1->player = $row['playerID'];
		if (!in_array($resource1->hexName, $resourcesPutIn)) {
			$resourcesPutIn[] = $resource1->hexName;
			$resourceArray[] =  $resource1;
		} 
	}

	$vertArray = array();

	$numberMaps = array(2=>1, 3=>2, 4=>3, 5=>4, 6=>5, 8=>5, 9=>4, 10=>3, 11=>2, 12=>1);


	$vertArray[0] = array($numberMaps[$resourceArray[0]->number], 0); 
	$vertArray[1] = array($numberMaps[$resourceArray[0]->number], 1);
	$vertArray[2] = array($numberMaps[$resourceArray[0]->number] + $numberMaps[$resourceArray[1]->number], 2);
	$vertArray[3] = array($numberMaps[$resourceArray[1]->number], 3); 
	$vertArray[4] = array($numberMaps[$resourceArray[1]->number] + $numberMaps[$resourceArray[1]->number], 4);
	$vertArray[5] = array($numberMaps[$resourceArray[2]->number], 5);  
	$vertArray[6] = array($numberMaps[$resourceArray[2]->number], 6);

	$vertArray[7] = array($numberMaps[$resourceArray[3]->number], 7); 
	$vertArray[8] = array($numberMaps[$resourceArray[3]->number] + $numberMaps[$resourceArray[0]->number], 8);
	$vertArray[9] = array($numberMaps[$resourceArray[0]->number] + $numberMaps[$resourceArray[3]->number]+ $numberMaps[$resourceArray[4]->number], 9);
	$vertArray[10] = array($numberMaps[$resourceArray[0]->number] + $numberMaps[$resourceArray[1]->number]+ $numberMaps[$resourceArray[4]->number], 10);

	$vertArray[11] = array($numberMaps[$resourceArray[1]->number] + $numberMaps[$resourceArray[4]->number]+ $numberMaps[$resourceArray[5]->number], 11); 
	$vertArray[12] = array($numberMaps[$resourceArray[1]->number] + $numberMaps[$resourceArray[2]->number]+ $numberMaps[$resourceArray[5]->number], 12);
	$vertArray[13] = array($numberMaps[$resourceArray[2]->number] + $numberMaps[$resourceArray[5]->number]+ $numberMaps[$resourceArray[6]->number], 13);
	$vertArray[14] = array($numberMaps[$resourceArray[2]->number] + $numberMaps[$resourceArray[6]->number], 14);
	$vertArray[15] = array($numberMaps[$resourceArray[6]->number], 15); 


	$vertArray[16] = array($numberMaps[$resourceArray[7]->number], 16); 
	$vertArray[17] = array($numberMaps[$resourceArray[7]->number] + $numberMaps[$resourceArray[3]->number], 17);
	$vertArray[18] = array($numberMaps[$resourceArray[7]->number] + $numberMaps[$resourceArray[3]->number]+ $numberMaps[$resourceArray[8]->number], 18);
	$vertArray[19] = array($numberMaps[$resourceArray[3]->number] + $numberMaps[$resourceArray[4]->number]+ $numberMaps[$resourceArray[8]->number], 19);
	$vertArray[20] = array($numberMaps[$resourceArray[8]->number] + $numberMaps[$resourceArray[4]->number]+ $numberMaps[$resourceArray[9]->number], 20);
	$vertArray[21] = array($numberMaps[$resourceArray[4]->number] + $numberMaps[$resourceArray[5]->number]+ $numberMaps[$resourceArray[9]->number], 21);
	$vertArray[22] = array($numberMaps[$resourceArray[9]->number] + $numberMaps[$resourceArray[5]->number] + $numberMaps[$resourceArray[10]->number], 22);
	$vertArray[23] = array($numberMaps[$resourceArray[5]->number] + $numberMaps[$resourceArray[6]->number]+ $numberMaps[$resourceArray[10]->number], 23);
	$vertArray[24] = array($numberMaps[$resourceArray[10]->number] + $numberMaps[$resourceArray[6]->number]+ $numberMaps[$resourceArray[11]->number], 24);
	$vertArray[25] = array($numberMaps[$resourceArray[11]->number] + $numberMaps[$resourceArray[6]->number], 25);
	$vertArray[26] = array($numberMaps[$resourceArray[11]->number], 26);

	$vertArray[27] = array($numberMaps[$resourceArray[7]->number], 27); 
	$vertArray[28] = array($numberMaps[$resourceArray[7]->number] + $numberMaps[$resourceArray[12]->number], 28); 

	$vertArray[29] = array($numberMaps[$resourceArray[7]->number] + $numberMaps[$resourceArray[8]->number]+ $numberMaps[$resourceArray[12]->number], 29);
	$vertArray[30] = array($numberMaps[$resourceArray[8]->number] + $numberMaps[$resourceArray[12]->number]+ $numberMaps[$resourceArray[13]->number], 30);
	$vertArray[31] = array($numberMaps[$resourceArray[8]->number] + $numberMaps[$resourceArray[9]->number]+ $numberMaps[$resourceArray[13]->number], 31);
	$vertArray[32] = array($numberMaps[$resourceArray[9]->number] + $numberMaps[$resourceArray[13]->number]+ $numberMaps[$resourceArray[14]->number], 32);
	$vertArray[33] = array($numberMaps[$resourceArray[9]->number] + $numberMaps[$resourceArray[10]->number] + $numberMaps[$resourceArray[14]->number], 33);
	$vertArray[34] = array($numberMaps[$resourceArray[10]->number] + $numberMaps[$resourceArray[14]->number]+ $numberMaps[$resourceArray[15]->number], 34);
	$vertArray[35] = array($numberMaps[$resourceArray[10]->number] + $numberMaps[$resourceArray[11]->number]+ $numberMaps[$resourceArray[15]->number], 35);
	$vertArray[36] = array($numberMaps[$resourceArray[11]->number] + $numberMaps[$resourceArray[15]->number], 36);
	$vertArray[37] = array($numberMaps[$resourceArray[11]->number], 37);

	$vertArray[38] = array($numberMaps[$resourceArray[12]->number], 38);
	$vertArray[39] = array($numberMaps[$resourceArray[12]->number] + $numberMaps[$resourceArray[16]->number], 39);
	$vertArray[40] = array($numberMaps[$resourceArray[12]->number] + $numberMaps[$resourceArray[13]->number]+ $numberMaps[$resourceArray[16]->number], 40);
	$vertArray[41] = array($numberMaps[$resourceArray[13]->number] + $numberMaps[$resourceArray[16]->number]+ $numberMaps[$resourceArray[17]->number], 41);
	$vertArray[42] = array($numberMaps[$resourceArray[13]->number] + $numberMaps[$resourceArray[14]->number]+ $numberMaps[$resourceArray[17]->number], 42);
	$vertArray[43] = array($numberMaps[$resourceArray[14]->number] + $numberMaps[$resourceArray[17]->number]+ $numberMaps[$resourceArray[18]->number], 43);
	$vertArray[44] = array($numberMaps[$resourceArray[14]->number] + $numberMaps[$resourceArray[18]->number]+ $numberMaps[$resourceArray[15]->number], 44);
	$vertArray[45] = array($numberMaps[$resourceArray[15]->number] + $numberMaps[$resourceArray[18]->number], 45);
	$vertArray[46] = array($numberMaps[$resourceArray[15]->number], 46);

	$vertArray[47] = array($numberMaps[$resourceArray[16]->number], 47);
	$vertArray[48] = array($numberMaps[$resourceArray[16]->number], 48);
	$vertArray[49] = array($numberMaps[$resourceArray[16]->number] + $numberMaps[$resourceArray[17]->number], 49);
	$vertArray[50] = array($numberMaps[$resourceArray[17]->number], 50);
	$vertArray[51] = array($numberMaps[$resourceArray[17]->number] + $numberMaps[$resourceArray[18]->number], 51);
	$vertArray[52] = array($numberMaps[$resourceArray[18]->number], 52);
	$vertArray[53] = array($numberMaps[$resourceArray[18]->number], 53);

	// for($i=0; $i<54; $i++){
	// 	$var = '$v' + strval(i);
	// 	$vertArray[i] = eval($var);
	// }

// Obtain a list of columns
foreach ($vertArray as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $vertArray);

//echo count($vertArray);


	for($k=0; $k<11; $k++){
		echo $vertArray[$k][1];
		echo '<br />';
	}
	
mysqli_close($con); 
?>