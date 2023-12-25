<?php
	$fruits= "Banana; Mango; Orange; Apple";
	/* Turning the string $fruits separated by semicolons into array elements */
	$fruitsname = explode("; ", $fruits);
	echo "Using Explode: " . "<BR />";
	echo $fruitsname[0] . "<BR />";
	echo $fruitsname[1] . "<BR />";
	echo $fruitsname[2] . "<BR />";
	echo $fruitsname[3] . "<BR />";
	echo "<HR>";
	/* Turning the array $fruitsname into a sentence separated by a space */

	echo "Using Implode: " . "<BR>";

	$fruitsarray = implode(" ", $fruitsname);
	echo $fruitsarray;
?>
