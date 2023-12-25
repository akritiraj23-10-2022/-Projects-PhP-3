<?php
	/*
		Date     :- 05th October 2009
		Author   :- Ivan Bayross
		Filename :- functions.php
      Purpose  :- Holds all the common functions used across the application.
	*/
     // Defining the function, which will calculate mileage.
function calculate_mileage($kms, $liters)
{
$result = $kms/$liters;
return($result);
} 
//Defining the function, which will create a single row single column table and populate it.
	function myTable($text, $border="0", $cellp="0", $cells="0")
	{
		print("<TABLE BORDER=$border CELLPADDING=$cellp 
						 CELLSPACING=$cells><TR>");
		print("<TD>$text</TD>");
		print("</TR></TABLE>");
	}
?>
