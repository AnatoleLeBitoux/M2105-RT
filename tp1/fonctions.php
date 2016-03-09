<?php

	function displayMessage($message , $count)
	{
		for($i=1;$i<=$count;$i++)
		{
			echo " <h{$i}> " ;
			echo $message ;
			echo " </h{$i}> " ; 
		}
	}	

?> 