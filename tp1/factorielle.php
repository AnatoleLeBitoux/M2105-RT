<?php

	function factR($nombre){
		return $nombre*factR($nombre--);
	}

function fact($nombre){
	$result=$nombre;
	while($nombre>1) {
		$nombre--;
		$result *= $nombre;

	}
	return $result;

}
?> 