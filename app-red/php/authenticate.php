<?php 
	if(isset($_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["password"] ))

		// echo "Welcome ";
		if($_POST["firstName"] == "Gaurav"

			&& $_POST["lastName"] == "Grover"
			&& $_POST["email"] == "gauravgrover95@gmail.com"
			&& $_POST["password"] == "bananas758"	

			) {
			echo "success";
		}
		else {
			echo "failed";
		}


?>