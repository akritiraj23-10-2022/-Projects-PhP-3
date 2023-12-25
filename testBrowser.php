	<HTML>
		<HEAD>
			<TITLE>Identifying The Web Browser</TITLE>
		</HEAD>
		<BODY>
			<?php
				if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false) 
				{
			?>
			<H3>The Web Browser is <B> Opera </B></H3>
			<CENTER>The function <B>strpos()</B> has returned <U>TRUE<U> for <B>Opera</B></CENTER>
			<?php
				}
				elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) 
				{
			?>
			<H3>The Web Browser is <U>Internet Explorer</U></H3>
			<CENTER>The function <B>strpos()</B> has returned <U>TRUE</U> for <B>MSIE</B></CENTER>
			<?php
				}
	          else
		    {
			?>
			<H3>The Web Browser is neither Opera nor Internet Explorer</H3>
			<CENTER>The function <B>strpos()</B> has returned <U>FALSE</U> for BOTH conditions</CENTER><BR>
			<B>Browser Type Is - </B>
			<?php
					echo $_SERVER['HTTP_USER_AGENT'];
				}
			?>
		</BODY>
	</HTML>
