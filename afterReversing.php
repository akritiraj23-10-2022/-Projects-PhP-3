<?php
	$fruits = "Banana; Mango; Orange; Apple, Grapes";
	/* Turning the string $fruits separated by semicolons into array elements */
	$fruitsname= explode("; ", $fruits);
	echo "Before Reversing";
	echo "<HR />";
	print_r($fruitsname);
	$reversefruitsname = array_reverse ($fruitsname);
	echo "<BR />";
	echo "<BR />After Reversing";
	echo "<HR />";
	print_r($reversefruitsname);
	$preversefruitsname = array_reverse ($fruitsname, TRUE);

	echo "<BR />";
	echo "<BR />After Reversing (Preserving Keys)";
	echo "<HR />";
	print_r($preversefruitsname);
?>
