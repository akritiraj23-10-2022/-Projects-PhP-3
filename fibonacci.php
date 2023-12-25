	<?php
		function fibonacci($number, $showseries="no")
		{
			$retval = "";
			if ($number == 1)
			{
				return 1;
			}
			$number1 = 1;
			$number2 = 0;
			$retval = "1";

			for ($i = 1; $i < $number; $i++)
			{
				$fib = $number2 + $number1;
				$number2 = $number1;
				$number1 = $fib;
				if ($showseries == 'yes')
				{
					$retval .= ", ".$fib;
				}
			}

			if ($showseries == 'yes')
			{
				return $retval;
			}
			else
			{
				return $fib;
			}
		}
		echo (fibonacci(17, "yes"));
	?>
