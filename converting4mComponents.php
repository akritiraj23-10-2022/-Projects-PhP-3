	<?php
		$newTime1 = date("l dS F Y h:i:s A", mktime(14, 30, 0, 10, 31, 2005, -1));
		$newTime2 = date("l dS F Y h:i:s A", mktime(14, 30, 0, 23, 31, 2005, -1));

		print "Original Value: " . $newTime1 . "<BR>";
		print "Modified Value: " . $newTime2 . "<BR>";
	?>
