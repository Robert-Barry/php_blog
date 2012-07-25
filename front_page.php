<?php
	// include the database
	require_once("blog_database.inc.php");
	
	// make the database query
	$query = "SELECT * FROM blog ORDER BY created DESC";
	// query the database
	$results = $db->query($query);
	
	// get the number of rows returned from the database
	$num_rows = $results->num_rows;

?>

<!doctype html>

<html>
    <head>
	<title>Python Blog</title>
	<style>
	body {
    	    font-family: sans-serif; 
	    width: 800px; 
	    margin: 0 auto; 
	    padding: 10px;
	}
	error {
    	    color: red;
	}
	label {
    	    display: block; 
	    font-size: 20px;
	}
	input[type=text] {
    	    width: 400px; 
	    font-size: 20px; 
	    padding: 2px;
	}
	textarea {
    	    width: 400px; 
	    height: 200px; 
	    font-size: 17px; 
	    font-family: monospace;
	}
	input[type=submit] {
     	    font-size: 24px;
	}
	hr {
    	    margin: 20px auto;
	}
	.art + .art {
    	    margin-top: 20px;
	}
	.art-title {
    	    font-weight: bold; 
	    font-size: 20px;
	}
	.art-body {
    	    margin: 0;
	    font-size: 17px;
	}
	</style>

    </head>

    <body>
	<h1>Python Blog</h1>

	<hr />
	
<?php
	for ($i = 0; $i < $num_rows; $i++) {
		$row = $results->fetch_object();
?>

		<div class="entry">
		    <div class="entry-title"><?php echo $row->title; ?></div>
		    <div class="entry-date"><?php echo $row->created; ?></div>
		    <pre class="entry-body"><?php echo $row->content; ?></pre>
		</div>
	    <hr />
<?php
	}
?>
	    
    </body>
</html>

