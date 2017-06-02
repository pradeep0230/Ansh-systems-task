<?php

	function calculate($argc){
		$sum=0;
		$negativeNumber='';
		if(sizeof($argc) > 2)
		{	
			$inputDta=explode("\\\\",$argc[2]);
			$delimiter=$inputDta[1];
			$number=explode($delimiter,$inputDta[2]);
			foreach($number as $data){
				if($data < 0)
				{
					if(strlen($negativeNumber))
					{
						$negativeNumber .= ',';
					}
					$negativeNumber .= $data;
				}
				$sum += $data;
			}
			return  (strlen($negativeNumber) > 0 ? "Negative numbers ( $negativeNumber ) not allowed" : $sum);
			
		}else if(sizeof($argc) == 1)
			return "Invalid input";
		else
			return 0;
	}
	echo calculate($argv);
?>

