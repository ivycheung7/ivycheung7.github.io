<?php
include("common_func.php");
try
{
	$db=get_connection();
	$typeee=test_input($_POST["petType"]);
	pg_prepare($db, "searchQuery", "select name from petInfo where pettype=$1");
	$result = pg_execute($db, "searchQuery", array($typeee));
	$resultValue = "<table>";
	$resultValue += "<tr> <td> " + "name" + "</td> </tr>";
	$ss=0;
	while ($row1 = pg_fetch_row($result))	
	{
		//$resultValue += "<tr> <td> " + $row1[0] + "</td> </tr>";
	//$resultValue += "<tr> <td> " + "erty" + "</td> </tr>";
	$ss++;
	}
	$resultValue += "</table>";
	//echo $resultValue;
	echo $ss;
}

catch(PDOException $e)	
{
	echo "Connection failed: " . $e->getMessage();
}
?>