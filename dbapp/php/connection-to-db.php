<?php 
	$mysql_host = "	sql313.cuccfree.com"; //specifies the hostname of the mysql server

	$mysql_username = "cucch_16987248"; //specifies the username of the mysql server u r using
	$mysql_password = "bananas758"; // specifies the mysql password for the mysql server in use

	$mysql_database = "cucch_16987248_mydatabase"; // specifies the database we are using in the mysql server

	if( !mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_database)) {
		die(mysql_error());
	}
?>