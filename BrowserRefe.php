<HTML>
	<BODY>
		<?php
			echo "Referer: " . $_SERVER["HTTP_HOST"] . "<BR>";
			echo "Browser: " . $_SERVER["HTTP_USER_AGENT"] . "<BR>";
			echo "User's IP address: " . $_SERVER["REMOTE_ADDR"];
		?>
	</BODY>
</HTML>
