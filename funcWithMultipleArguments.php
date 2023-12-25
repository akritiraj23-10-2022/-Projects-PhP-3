<HTML>
	<BODY>
		<?php
		/* Defining the function, which will create a single row single column table and populate it */
			function myTable($text, $border="0", $cellpadding="0", $cellspacing ="0")
			{
			print("<TABLE BORDER=$border CELLPADDING=$cellpadding
							 CELLSPACING=$cellspacing ><TR>");
				print("<TD>$text</TD>");
				print("</TR></TABLE>");
			}
		/* Calling the myTable() function defined above */
			myTable("Ivan Bayross is a Professor", 0, 1, 1);

		?>
	</BODY>
</HTML>
