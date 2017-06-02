<?php
function multiexplode ($delimiters,$string) {

     $ready = str_replace($delimiters, $delimiters[0], $string); 
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

function calculate($argc){
		$sum=0;
		if(sizeof($argc) > 2)
		{	 
			$delimiters=array(",","\\n");
			$inputDta=multiexplode($delimiters,$argc[2]);
			foreach($inputDta as $data){
			$sum += $data;
			}
			return  $sum;
			
		}else if(sizeof($argc) == 1)
			return "Invalid input";
		else
			return 0;
		
	}
	echo calculate($argv);
?>