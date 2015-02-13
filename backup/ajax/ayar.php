<?php
	$host = "94.73.151.235";
	$user = "kariyerfm_db";
	$pass = "3252439a";
	$db   = "kariyerfm_db";
	
	$baglan = mysql_connect($host, $user, $pass) or die (mysql_Error());
	mysql_select_db($db, $baglan) or die (mysql_Error());
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET NAMES 'utf8'");

?>