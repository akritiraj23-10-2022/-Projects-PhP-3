	<?php
		$str = "Using strpos() For String Extraction";
		$idx1 = strpos($str, "ing");
		$idx2 = strpos($str, "ing", 15);
	 	/* Using the strpos() without the three parameter. */
		if ($idx1 === false)
		{
			print "First identical condition results a SUBSTRING NOT FOUND<BR>";
		}
		else
		{
			print "First identical condition results a SUBSTRING FOUND at $idx1<BR>";
		}
		/* Using the strops() with the three parameter. */
		if ($idx2 === false)
		{
			print "Second identical condition results a SUBSTRING NOT FOUND<BR>";
		}
		else
		{
			print "Second identical condition results a SUBSTRING FOUND at $idx2<BR>";
		}
	?>
