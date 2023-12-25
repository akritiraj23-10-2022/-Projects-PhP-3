	<?php
		$name1 = str_pad("PHP for Beginner", 20, '*', STR_PAD_LEFT);
		echo 'Left Pad: ' . $name1 . '<BR />';

		$name2 = str_pad("PHP for Beginner", 20, '*', STR_PAD_RIGHT);
		echo 'Right Pad: ' . $name2 . '<BR />';

		$name3 = str_pad("PHP for Beginner", 20, '*', STR_PAD_BOTH);
		echo 'Both side Padding: ' . $name3;
	?> 
