<?php
	$str = "String Extraction";
	print "Start at 2: " . substr($str, 2) . "<BR />";
	print "Start at 8: " . substr($str, 8) . "<BR />";
	print "Start at 18: " . substr($str, 18) . "<BR />";
	print "From 7 get 5: " . substr($str, 7, 5) . "<BR />";
	print "From 2 get -11: " . substr($str, 2, -11) . "<BR />";
	print "Start at -8: " . substr($str, -8) . "<BR />";
?>
