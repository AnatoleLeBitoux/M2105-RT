<?php include("factorielle.php"); ?>
<html>
	<head>
	
	</head>
	
	<body>
	
		<?php 
		
		$message = " Coucou monde !!! " ;
		
		for($i=1;$i<=5;$i++)
		{
			echo " <h{$i}> " ;
			echo $message ;
			echo " </h{$i}> " ; 
		}
			
		
		?>
		
	</body>
</html>