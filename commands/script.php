<?php 

	require "connection-to-db.php";
	require "sqlutils.php";

	$command = $_POST["command"];
	$query = $command;
	$query = trim($query);
	$result = mysql_query($query);
	process($query, $result);

?>