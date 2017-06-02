<?php
	
	function calculate($argc){
		$sum=0;
		if(sizeof($argc) > 2)
		{	
			$inputDta=explode(",",$argc[2]);
			if(sizeof($inputDta)>2)
			{
				return "Stack overflow";
			}
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
