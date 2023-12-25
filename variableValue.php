<?php
	if(isset($name))
	{
		echo 'The Variable Holds Value.' . "<BR>";
	}
	else
	{
		echo 'The Variable Does Not Hold A Value.' . "<BR>";
		$name = "Ivan Bayross";
		if(isset($name))
		{
			echo 'The Variable Now Holds A Value: ' . $name . "<BR>";
			if(empty($name))
			{
				echo 'The Variable Now Holds FALSE.' . "<BR>";
			}
			unset($name);
			if(!isset($name))
			{
				echo 'The Variable Is Being Deleted.' . "<BR>";
			}
		}
	}
?>
