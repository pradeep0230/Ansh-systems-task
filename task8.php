<?php
	
	function calculate($argc){
		$sum=0;
		$multiply = 1;
		if(sizeof($argc) > 2)
		{	
			$inputDta=explode(",",$argc[2]);
			foreach($inputDta as $data)
			{
				if($argc[1] == "add")
				{
					$sum += $data;
				}
				else if($argc[1] == "multiply")
				{
					$multiply *= $data;
				}
				else
				{
					$multiply = "Invalid operator. Use either add or multiply";
				}
			}
			return  ($argc[1] == "add" ? $sum : $multiply);
			
		}else if(sizeof($argc) == 1)
			return "Invalid input";
		else
			return 0;
		
	}
	echo calculate($argv);
	
?>
