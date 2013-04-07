<?php
function initialize(){
	$rollValue;
	$resource;
	for($squareNumber=1; $squareNumber<=19; $squareNumber++){
		printf("Enter the roll value for %s\n", $squareNumber);
		$resource = $_GET["slider-a1"];
		printf("Enter the resource value for %s\n", $squareNumber);
		$resource = $_GET["select-choice-a1"];

	}
}

function resourceList(){
	$resourceArray=array();
	for($i=0; $i<3; $i++){
		$X = 3 + (2*(i));
		$Y = 3 + (2*(i));
		$resourceArray[i] = 
	}
	for($i=3; $i<7; $i++){
		$X = 3 + (2*(i));
		$Y = 3 + (2*(i));
		$resourceArray[i] = 
	}
	for($i=7; $i<12; $i++){
		$X = 3 + (2*(i));
		$Y = 3 + (2*(i));
		$resourceArray[i] = 
	}
	for($i=12; $i<16; $i++){
		$X = 3 + (2*(i));
		$Y = 3 + (2*(i));
		$resourceArray[i] = 
	}
	for($i=16; $i<19; $i++){
		$X = 3 + (2*(i));
		$Y = 3 + (2*(i));
		$resourceArray[i] = 
	}

}

?>