<?php

	$string= 'ankit is good';
	if(($pos= strpos($string, 'an')) === false)
	{
		echo "not found";
	}
	else
		echo 'string found';

?>