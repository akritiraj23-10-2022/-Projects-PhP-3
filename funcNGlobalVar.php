<?php
	function &GlobalVariable($str)
	{
		return $GLOBALS[$str];
	}
	$number = 30;
	$value1 =&GlobalVariable("number");
	print $value1 . "<BR>";
	$value1 = 40;
	print $number. "<BR>";
	$value1 = $value1 + 35;
	print $number;
?>
