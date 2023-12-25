<?php
	$fruits= "Banana; Mango; Orange; Apple";
	/* Turning the string $fruits separated by semicolons into array elements */
	$fruitsname = explode("; ", $fruits);
	echo "<HR />";
	$newfruits = "Cherry";
	array_push ($fruitsname, $newfruits);
	echo "After Pushing a new fruits" . "<BR />";
	echo $fruitsname[0] . "<BR />";
	echo $fruitsname[1] . "<BR />";

	echo $fruitsname[2] . "<BR />";
	echo $fruitsname[3] . "<BR />";
	echo "<HR />";
	array_push ($fruitsname, "Avocado", "Blackberry", "Grapefruit");
	echo "After Pushing a set of new fruits" . "<BR />";
	echo $fruitsname[0] . "<BR />";
	echo $fruitsname[1] . "<BR />";
	echo $fruitsname[2] . "<BR />";
	echo $fruitsname[3] . "<BR />";
	echo $fruitsname[4] . "<BR />";
	echo $fruitsname[5] . "<BR />";
	echo $fruitsname[6] . "<BR />";
?>
