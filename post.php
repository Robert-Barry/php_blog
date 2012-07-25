<?php
	// include the database
	require_once("blog_database.inc.php");
	
	// create the query
	$id = $_GET['id'];
	
	$query = "SELECT * FROM blog WHERE id=$id";
	$result = $db->query($query);
	$row = $result->fetch_object();
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
	
		<div class="entry">
		    <div class="entry-title"><?php echo $row->title; ?></div>
		    <div class="entry-date"><?php echo $row->created; ?></div>
		    <pre class="entry-body"><?php echo $row->content; ?></pre>
		</div>
	    <hr />

    </body>
</html>