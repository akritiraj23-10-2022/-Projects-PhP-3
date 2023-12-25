<?php
		$str = "http://www.ivanbayross.com?txtName=Ivan
						&txtSurname=Bayross&txtDOB=23/06/1952";
		$columns = spliti(".txt", $str, 4);
		echo "The parameters and their corresponding values passed are: <br />";
	print_r($columns);
	?>
