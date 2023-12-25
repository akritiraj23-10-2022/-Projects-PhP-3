<?php
	$fruits= " Banana; Mango; Orange; Apple";
/* Turning the string $fruits separated by semicolons into array elements */
	$fruitsname= explode("; ", $fruits);
	echo "<HR />";
	while ($element = array_pop ($fruitsname))
	{
		echo $element;

		echo "<BR />";
		echo "<HR />";
		echo "After Popping $element the array named fruitsname is left with :";
		print_r($fruitsname);
		echo "<HR />";
	}
?>
