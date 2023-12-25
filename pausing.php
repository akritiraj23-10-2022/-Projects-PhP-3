	<?php
		$now = time();
		print date("h:i:s A") . "<BR />";
		echo "Pause<BR />";
		while ($now + 4 > time())
		{
		/* Performing no action */
		}
 
		echo "Resume<BR />";
		print date("h:i:s A");
	?>
