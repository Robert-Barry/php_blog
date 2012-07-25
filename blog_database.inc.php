<?php
	$db= new mysqli("localhost", "root", "root", "blog");
	
	if ($db === false) {
		$db_error = "ERROR: There was a difficultly connecting to the database. Please try again later.";
	}
	
?>