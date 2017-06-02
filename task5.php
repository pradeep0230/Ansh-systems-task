<?php

	function calculate($argc){
		$sum=0;
		if(sizeof($argc) > 2)
		{	
			$inputDta=explode("\\\\",$argc[2]);
			$delimiter=$inputDta[1];
			$number=explode($delimiter,$inputDta[2]);
			foreach($number as $data){
			if($data < 0)
					return "Negative numbers not allowed";
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

