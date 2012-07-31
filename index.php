<!--
	Portfolio and Resume Site
	for Robert Barry
	
	BLOG
		Robert Barry's professional blog
	
	Author and Coding: Robert Barry
	Date Created: July 31, 2012
	Last Update: July 31, 20122
	
	File:             index.html
	Image Files:      
	CSS Files:        global.css, blog.css
	Javascript files: spam.js
	Links:            index.html, resume.php, contact.php, about.php, web.php, email
	
-->

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
	<title>Robert Barry's Professional Blog</title>
	
	<meta charset="utf-8" />
	<!-- META TAGS FOR SEO -->
	<meta name="author" content="Robert Barry" />
	<meta name="classification" content="Portfolio" />
	<meta name="copyright" content="2011 Robert Barry" />
	<meta name="description" content="Robert Barry is an IT professional specializing in multimedia and web design/developement." />
	<meta name="keywords" content="IT, Java developer, Java, JavaScript developer, web designer, web design, Adobe, Flash, multimedia, multimedia design, multimedia developer, developer, programmer, multimedia designer, Robert Barry, Robert Barry multimedia, Pittsburgh, Wheeling, Columbus" />
	<meta name="owner" content="Robert Barry" />
	<meta name="rating" content="general" />
	
	<link href="../css/global.css" rel="stylesheet" type="text/css" />
	<link href="../css/blog.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
    
		<div id="outer_wrapper"> <!-- FOR CENTERING -->
    
    		<div id="inner_wrapper"> <!-- FOR BACKGROUND IMAGES -->
<?php
	require_once("../includes/header.php");		
?>

				<div id="content">
	
<?php
	for ($i = 0; $i < $num_rows; $i++) {
		$row = $results->fetch_object();
?>

		<div class="entry">
			<div class="entry-header">
		    	<h2 class="entry-title"><?php echo $row->title; ?></h2>
		    	<p class="entry-date"><?php echo $row->created; ?></p>
		    </div> <!-- end entry header -->
		    <pre class="entry-body"><?php echo $row->content; ?></pre>
		</div>
<?php
	}
?>
				</div> <!-- end content -->
			</div> <!-- end inner_wrapper -->
		</div> <!--end outer_wrapper -->
    </body>
</html>

