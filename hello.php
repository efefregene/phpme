<!DOCTYPE html>
<html>
<head>
	<title>My First PHP page</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = null;
		$database = "phpDB";

		// Creating the connection with Database
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check the connection
		if (!$conn){
			die("Connection failed: ".mysql_error());
		}
		echo "---Connection Successful---";

		echo "<h2>Hello World</h2>";
		mysqli_close($conn);
	?>

</body>
</html>