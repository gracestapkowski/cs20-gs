<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Form</title>
</head>

<body>
	<?php
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$instructions = $_GET['instructions'];
	
	$str =  "First name: $fname<br>";
	$str .= "Last name: $lname<br>";
	$str .= "Special Instructions: $instructions <br>";
	
	echo $str;
	echo "<script> console.log('php ran') </script>";
	?>
</body>
</html>
