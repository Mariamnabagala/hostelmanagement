<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<h1>Home page</h1>
	<?php
	session_start();
	$email= $_SESSION['UserName'];
	echo "Welcome $UserName";


	?>


</body>
</html>