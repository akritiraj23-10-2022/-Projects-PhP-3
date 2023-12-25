<?php
	function factorial( $n )
	{
		if ($n == 0 || $n == 1)
		{
			// $n == 0 or $n == 1 is the exit conditions
			return 1;
		}
		else
		{
			// Next line contains recursive call
			return ($n * factorial($n-1));
		}
	}
	echo factorial(6);
?>  
