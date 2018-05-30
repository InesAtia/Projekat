<!DOCTYPE html>
<html>
	<head>
		<title>Admin panel</title>
	</head>
	<body>
		<h1>Admin panel</h1>


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
		
		$sql = "SELECT id, username, password, ime, prezime FROM user";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table  border='1'><tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>IME</th><th>PREZIME</th></tr>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><td>$row[id]</td><td>$row[username]</td><td>$row[password]</td><td>$row[ime]</td><td>$row[prezime]</td>";
		    	echo "<td><a href=\"delete.php?id=".$row['id']."\">Delete</a></td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		$conn->close(); 
		?>

	</body>
</html>