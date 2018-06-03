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
		
		$sql = "SELECT naziv, opis, cijena_po_jedinici, tip, slika FROM proizvod";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table  border='1'><tr><th>Slika</th><th>Naziv</th><th>Opis</th><th>Cijena</th><th>Tip</th><th>Narudzba</th></tr>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr>";
		    	echo "<td><img src='proizvodi/$row[slika]'</td>";
		    	echo "<td><h1>$row[naziv]</h1></td>";
		    	echo "<td><p>$row[opis]</p></td>";
		    	echo "<td><p>$row[cijena_po_jedinici]</p></td>";
		    	echo "<td><p>$row[tip]</p></td>";
		    	echo "<td><a href='actionNarudzba.php?naziv=$row[naziv]&cijena=$row[cijena_po_jedinici]&tip=$row[tip]'>Naruci</a></td>";
		    	echo "</tr></form>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}


		$conn->close(); 
		?>

	</body>
</html>