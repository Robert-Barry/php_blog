<?php
	$db= new mysqli("localhost", "####", "####", "####");
	
	if ($db === false) {
		$db_error = "ERROR: There was a difficultly connecting to the database. Please try again later.";
	}
	
?>