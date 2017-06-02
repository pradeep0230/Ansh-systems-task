<?php
	
	function calculate($argc){
		$sum=0;
		$multiply = 1;
		if(sizeof($argc) > 2)
		{	
			$inputDta=explode(",",$argc[2]);
			foreach($inputDta as $data)
			{
				if($data <=	1000)
				{
					$sum += $data;
				}
			}
			return  $sum;
			
		}else if(sizeof($argc) == 1)
			return "Invalid input";
		else
			return 0;
		
	}
	echo calculate($argv);
	
?>
