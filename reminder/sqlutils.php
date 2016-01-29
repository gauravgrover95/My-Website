
<!-- display SELECT-ions in a Table -->

<?php 
	function displaySelection($result) {

		echo "<table border = 1>";
		while($row = mysql_fetch_array($result)) {
			
			echo "<tr>";
			for($i = 0; $i < mysql_num_fields($result); $i++) {

				echo "<td>" . $row[$i] . "</td>";
			}
			echo "</tr>";
		}

		echo "</table>";
	}
?>


<!-- processing any mysql command given to php -->
<?php 
	function process($query, $result) {

		if($result == "") echo "COMMAND FAILED<br>The command was: " . $query . "\n";
		else if($result == 1) echo "COMMAND PROCESSED SUCCESSFULLY<p>\n";
		else {
			echo "<table border = 1>";
			while($row = mysql_fetch_array($result)) {
				echo "<tr>";
				for($i = 0; $i < mysql_num_fields($result); $i++) {
					echo "<td>" . $row[$i] . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>

<!-- processing any mysql command given to php -->
<?php 
	function processResult($query, $result) {

		if($result == "") echo "COMMAND FAILED<br>The command was: " . $query . "\n";
		else if($result == 1) echo "COMMAND PROCESSED SUCCESSFULLY<p>\n";
		else {
			
			$numrows = mysql_num_rows($result);
			$numcols = mysql_num_fields($result);
			echo "Number of rows are: " . $numrows . "<br>";
			echo "Number of cols are: " . $numcols . "<p>\n";

			echo "<table border = 1>";

			if(strtolower(substr($query, 0, 8)) == "describe" || strtolower(substr($query, 0, 4)) == "show") {
				echo "<tr><td><b>Field</b></td><td><b>Type</b></td>" . "<td><b>Null</b></td><td><b>Key</b></td>"
				 . "<td><b>Default</b></td><td><b>Extras</b></td></tr>\n";

			} 

			



			while($row = mysql_fetch_array($result)) {
				echo "<tr>";
				for($i = 0; $i < mysql_num_fields($result); $i++) {
					echo "<td>" . $row[$i] . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>
