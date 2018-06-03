<!DOCTYPE html>
<html>
	<head>
		<title>Proizvodi</title>
	</head>
	<body>
		<h1>Proizvodi</h1>


		<?php

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "catering";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully<br>";
		
		$sql = "SELECT naslov, opis FROM post";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><td><h1>$row[naslov]</h1></td></tr>";
		    	echo "<tr><td><p>$row[opis]</p></td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}


		$conn->close(); 
		?>

	</body>
</html>