<?php
	// import the database
	require_once("blog_database.inc.php");
	// test that the data was submitted
	if ($_POST['submit']) {
		// assign variables
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		if (!$title || !$content) {
			$error = "Both a title and content are required!";
		} else {
			$query = "INSERT INTO blog (title, content) VALUES ('".$title."', '".$content."')";
			$result = $db->query($query);
			// test that the query was successful
			if (!$result) {
				echo "ERROR: The article was not added to the database!";
			} else {
				$id_query = "SELECT id FROM blog WHERE title='$title' ";
				$id_result = $db->query($id_query);
				$row = $id_result->fetch_assoc();
				header("Location: ".$row['id']);
				
			}
		}		
	}
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
	<h2>New Post</h2>

	<form method="post">
	    <label>
		<div>post title</div>
	    	    <input type="text" name="title" />
	    </label>

	    <div>blog post</div>
	    <textarea name="content"></textarea>

	    <div><input type="submit" name="submit" /></div>
	</form>

    </body>
</html>
