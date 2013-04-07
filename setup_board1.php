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

	$v0 = $numberMaps[resourceArray[0]->number];
	$v1 = $numberMaps[resourceArray[0]->number];
	$v2 = $numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number];
	$v3 = $numberMaps[resourceArray[1]->number];
	$v4 = $numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[1]->number];
	$v5 = $numberMaps[resourceArray[2]->number];
	$v6 = $numberMaps[resourceArray[2]->number];

	$v7 = $numberMaps[resourceArray[3]->number];
	$v8 = $numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[0]->number];
	$v9 = $numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[4]->number];
	$v10 = $numberMaps[resourceArray[0]->number] + $numberMaps[resourceArray[1]->number]+ $numberMaps[resourceArray[4]->number];
	$v11 = $numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[5]->number];
	$v12 = $numberMaps[resourceArray[1]->number] + $numberMaps[resourceArray[2]->number]+ $numberMaps[resourceArray[5]->number];
	$v13 = $numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[6]->number];
	$v14 = $numberMaps[resourceArray[2]->number] + $numberMaps[resourceArray[6]->number];
	$v15 = $numberMaps[resourceArray[6]->number];

	$v16 = $numberMaps[resourceArray[7]->number];
	$v17 = $numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number];
	$v18 = $numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[3]->number]+ $numberMaps[resourceArray[8]->number];
	$v19 = $numberMaps[resourceArray[3]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[8]->number];
	$v20 = $numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[4]->number]+ $numberMaps[resourceArray[9]->number];
	$v21 = $numberMaps[resourceArray[4]->number] + $numberMaps[resourceArray[5]->number]+ $numberMaps[resourceArray[9]->number];
	$v22 = $numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[10]->number];
	$v23 = $numberMaps[resourceArray[5]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[10]->number];
	$v24 = $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[6]->number]+ $numberMaps[resourceArray[11]->number];
	$v25 = $numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[6]->number];
	$v26 = $numberMaps[resourceArray[11]->number];

	$v27 = $numberMaps[resourceArray[7]->number];
	$v28 = $numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[12]->number];
	$v29 = $numberMaps[resourceArray[7]->number] + $numberMaps[resourceArray[8]->number]+ $numberMaps[resourceArray[12]->number];
	$v30 = $numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[12]->number]+ $numberMaps[resourceArray[13]->number];
	$v31 = $numberMaps[resourceArray[8]->number] + $numberMaps[resourceArray[9]->number]+ $numberMaps[resourceArray[13]->number];
	$v32 = $numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[14]->number];
	$v33 = $numberMaps[resourceArray[9]->number] + $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number];
	$v34 = $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[15]->number];
	$v35 = $numberMaps[resourceArray[10]->number] + $numberMaps[resourceArray[11]->number]+ $numberMaps[resourceArray[15]->number];
	$v36 = $numberMaps[resourceArray[11]->number] + $numberMaps[resourceArray[15]->number];
	$v37 = $numberMaps[resourceArray[11]->number];

	$v38 = $numberMaps[resourceArray[12]->number];
	$v39 = $numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[16]->number];
	$v40 = $numberMaps[resourceArray[12]->number] + $numberMaps[resourceArray[13]->number]+ $numberMaps[resourceArray[16]->number];
	$v41 = $numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[16]->number]+ $numberMaps[resourceArray[17]->number];
	$v42 = $numberMaps[resourceArray[13]->number] + $numberMaps[resourceArray[14]->number]+ $numberMaps[resourceArray[17]->number];
	$v43 = $numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[17]->number]+ $numberMaps[resourceArray[18]->number];
	$v44 = $numberMaps[resourceArray[14]->number] + $numberMaps[resourceArray[18]->number]+ $numberMaps[resourceArray[15]->number];
	$v45 = $numberMaps[resourceArray[15]->number] + $numberMaps[resourceArray[18]->number];
	$v46 = $numberMaps[resourceArray[15]->number];

	$v47 = $numberMaps[resourceArray[16]->number];
	$v48 = $numberMaps[resourceArray[16]->number];
	$v49 = $numberMaps[resourceArray[16]->number] + $numberMaps[resourceArray[17]->number];
	$v50 = $numberMaps[resourceArray[17]->number];
	$v51 = $numberMaps[resourceArray[17]->number] + $numberMaps[resourceArray[18]->number];
	$v52 = $numberMaps[resourceArray[18]->number];
	$v53 = $numberMaps[resourceArray[18]->number];

	for($i=0; $i<54; $i++){
		$vertArray[i] = $v $(i);
	}
	sort($vertArray);
}

 mysqli_close($con);
?>