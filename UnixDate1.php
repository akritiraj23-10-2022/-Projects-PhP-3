<?php
	$UnixDate1 = "Year End 2009";
	$UnixDate2 = "31st Dec. 2009";
	$UnixDate3 = "25 August 2005 05:30";
	$UnixDate4 = "+2 Day";
	$UnixDate5 = "Every Wednesday";

	if (strtotime($UnixDate1) == FALSE)
	{
		print "Date conversion failed for $UnixDate1 !<BR>";
	}
	else
	{
		print "Date conversion succeeded for $UnixDate1 !<BR>";
	}

	if (strtotime($UnixDate2) == FALSE)
	{
		print "Date conversion failed for $UnixDate2 !<BR>";
	}
	else
	{
		print "Date conversion succeeded for $UnixDate2 !<BR>";
	}

	if (strtotime($UnixDate3) == FALSE)
	{
		print "Date conversion failed for $UnixDate3 !<BR>";
	}
	else
	{
		print "Date conversion succeeded for $UnixDate3 !<BR>";
	}

	if (strtotime($UnixDate4) == FALSE)
	{
		print "Date conversion failed for $UnixDate4 !<BR>";
	}
	else
	{
		print "Date conversion succeeded for $UnixDate4 !<BR>";
	}

	if (strtotime($UnixDate5) == FALSE)
	{
		print "Date conversion failed for $UnixDate5 !<BR>";
	}
	else
	{
		print "Date conversion succeeded for $UnixDate5 !<BR>";
	}
?>
