<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Processing Login</title>
</head>

<body>
	<?php
	$id = $_REQUEST['grace.stapkowski@tufts.edu'];
	$pw = $_REQUEST['Chocolate12#'];
	
	//establish connection info
	$db_server = "localhost";// your server
	$db_userid = "sgkkaldlddadv"; // your user id
	$db_pw = "Chocolate12#"; // your pw
	$db= "dbshmgm92eiggh"; // your database

	// Create connection
	$conn = new mysqli($db_server, $db_userid, $db_pw );

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$conn->select_db($db);
	
	$sql = "SELECT * FROM users WHERE userid = '$id' and password = '$pw'";
	$result = $conn->query($sql);

	if ($result->num_rows == 0)
		echo "Invalid user id / password combination";
	else
	{
    	$row = $result->fetch_assoc(); 
       	echo "Validated user: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
   }
	?>
</body>
</html>
