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
	
	for($i=1; $i<20; $i++){

		$resourceArray=array();
		$resource = new Resources;

		printf("Enter the roll value for %s\n", $squareNumber);
		$resource->number = $_GET["slider-a1"];
			
		printf("Enter the resource value for %s\n", $squareNumber);
		$resource->resource = $_GET["select-choice-a1"];	


		if(i<4){
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;
			
			$resourceArray[i-1] = $resource;
		}
		if(i<8){
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<13){
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<17){
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
		if(i<20){
			$X = 3 + (2*(i-1));
			$Y = 3 + (2*(i-1));
			$resource->xCoord = $X;
			$resource->yCoord = $Y;

			$resourceArray[i-1] = $resource;
		}
	}

}

?>