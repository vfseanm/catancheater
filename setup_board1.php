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

	$v0 = ($numberMaps[resourceArray[0]->number], 0);
	$v1 = ($numberMaps[resourceArray[0]->number], 1);
	$v2 = ($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number], 2);
	$v3 = ($numberMaps[resourceArray[1]->number], 3);
	$v4 = ($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[1]->number], 4);
	$v5 = ($numberMaps[resourceArray[2]->number], 5);
	$v6 = ($numberMaps[resourceArray[2]->number], 6);

	$v7 = ($numberMaps[resourceArray[3]->number], 7);
	$v8 = ($numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[0]->number], 8);
	$v9 = ($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[4]->number], 9);
	$v10 = ($numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number]+ $numberMaps[resourceArray[4]->number], 10);
	$v11 = ($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[5]->number], 11;
	$v12 = ($numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[2]->number]+ $numberMaps[resourceArray[5]->number], 12);
	$v13 = ($numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[6]->number], 13);
	$v14 = ($numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[6]->number], 14);
	$v15 = ($numberMaps[resourceArray[6]->number], 15);

	$v16 = ($numberMaps[resourceArray[7]->number], 16);
	$v17 = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number], 17);
	$v18 = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[8]->number], 18);
	$v19 = ($numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[8]->number], 19);
	$v20 = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[9]->number], 20);
	$v21 = ($numberMaps[resourceArray[4]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[9]->number], 21);
	$v22 = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[10]->number], 22);
	$v23 = ($numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[10]->number], 23);
	$v24 = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[11]->number], 24);
	$v25 = ($numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[6]->number], 25);
	$v26 = ($numberMaps[resourceArray[11]->number], 26);

	$v27 = ($numberMaps[resourceArray[7]->number], 27);
	$v28 = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[12]->number], 28);
	$v29 = ($numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[8]->number]+ $numberMaps[resourceArray[12]->number], 29);
	$v30 = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[12]->number]+ $numberMaps[resourceArray[13]->number], 30);
	$v31 = ($numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[9]->number]+ $numberMaps[resourceArray[13]->number], 31);
	$v32 = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[14]->number], 32);
	$v33 = ($numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number], 33);
	$v34 = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[15]->number], 34);
	$v35 = ($numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[11]->number]+ $numberMaps[resourceArray[15]->number], 35);
	$v36 = ($numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[15]->number];
	$v37 = ($numberMaps[resourceArray[11]->number], 36);

	$v38 = ($numberMaps[resourceArray[12]->number], 38);
	$v39 = ($numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[16]->number], 39);
	$v40 = ($numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[16]->number], 40);
	$v41 = ($numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[16]->number]+ $numberMaps[resourceArray[17]->number], 41);
	$v42 = ($numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[17]->number], 42);
	$v43 = ($numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[17]->number]+ $numberMaps[resourceArray[18]->number], 43);
	$v44 = ($numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[18]->number]+ $numberMaps[resourceArray[15]->number], 44);
	$v45 = ($numberMaps[resourceArray[15]->number] + $numberMaps[resourceArray[18]->number], 45);
	$v46 = ($numberMaps[resourceArray[15]->number], 46);

	$v47 = ($numberMaps[resourceArray[16]->number], 47);
	$v48 = ($numberMaps[resourceArray[16]->number], 48);
	$v49 = ($numberMaps[resourceArray[16]->number] + $numberMaps[resourceArray[17]->number], 49);
	$v50 = ($numberMaps[resourceArray[17]->number], 50);
	$v51 = ($numberMaps[resourceArray[17]->number] + $numberMaps[resourceArray[18]->number], 51);
	$v52 = ($numberMaps[resourceArray[18]->number], 52);
	$v53 = ($numberMaps[resourceArray[18]->number], 53);

	for($i=0; $i<54; $i++){
		$var = '$v' + strval(i);
		$vertArray[i] = eval($var);
	}
	sort($vertArray);

	for($k=0; $k<11; $k++){
		echo $vertArray
	}
}

resourceList();	
mysqli_close($con);
?>