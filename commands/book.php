// 	echo "<p>Query is: " . $command . "</p><br><br>";

// 	$query = $command;
// 	$query = trim($query);
// 	$query = str_replace('\\', '', $query)

// 	if($query != "") {
// 		echo "Query is: " . $query . "<p>\n";
// 		$result = mysql_query($query);
// 		processResult($query,$result);
// 	}

// //************************************************************

// 	if($table != "") {
// 		echo "Table is: " . $table . "<p>\n";
// 		$query1 = "SHOW COLUMNS FROM " . $table;
// 		$result1 = mysql_query($query1);
// 		$query2 = "SELECT * FROM " . $table;
// 		$result2 = mysql_query($query2);
// 		showtable($result1, $result2);
// 		echo "<p><hr><p>\n";
// 	}

?>

<!-- <form name = submission action = "?" method = "post">
<textarea rows="6" cols="80" name="query"><?php echo $query; ?></textarea> Enter mySQL query 
<p></p>
<input type = textsize=20 maxlength="50" name="table" value="<?php echo $table ?>"> Enter name of Table to display
<p></p>
<input type = submit value="Submit" name = submit>
</form>
 -->
<?php
