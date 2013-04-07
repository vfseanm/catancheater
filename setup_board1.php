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
	
	$resource = new Resources;
	$resource->xCoord;
	$resource->xCoord;

	$resourceArray=array();

	for($i=1; $i<20; $i++){
		if(i<4){
			$resource = new Resources;
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<8){
			$resource = new Resources;
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<13){
			$resource = new Resources;
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<17){
			$resource = new Resources;
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<20){
			$resource = new Resources;
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
	}

}

?>