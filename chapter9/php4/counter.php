<?php
	session_start();
	//ADD your session code here
	if(isset($_SESSION["views"])) {
		$_SESSION["views"]++;
	}
	else {
		$_SESSION["views"] = 1;
	}
?>
<!DOCTYPE html>
<html lang="EN">

<head>
<title>My Home Page</title>
</head>

<body>

<h1> My name is Sreedevi.</h1> 
<p>
	Welcome to my page.
	I am on the faculty in the IS Department at UMBC.
</p>
<p> 
	My hobbies include 
</p>
<ul>
	<li>art </li>
	<li>watching sci-fi</li>
</ul>
<p>
	Welcome to the Page. <br />
	You have visited the page <strong><?php echo $_SESSION["views"] ?></strong> times.
</p>

</body>

</html>