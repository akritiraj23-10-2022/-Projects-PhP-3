	<?php
		function Tax($sal)
		{
			$tax = ($sal *33)/100;
			return($tax);
		}
		$ sal = 65500;
		$taxamount = Tax($sal);
		echo "Tax for Rs. ".$ sal." is: Rs. ".$taxamount;
	?>
