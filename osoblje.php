<!DOCTYPE html>
<html>
	<head>
		<title>Osoblje panel</title>
	</head>
	<body>
		<h1>Osoblje panel</h1>


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
		
		$sql = "SELECT id, naziv, opis, cijena_po_jedinici, tip, slika FROM proizvod";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table  border='1'><tr><th>ID</th><th>NAZIV</th><th>OPIS</th><th>CIJENA</th><th>TIP</th><th>SLIKA</th><th>delete</th><th>save</th></tr>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><form action='osobljeSave.php' method='POST'>";
		    	echo "<td><input style='width:25px' type='text' name='id' value='$row[id]'></td>";
		    	echo "<td><input type='text' name='naziv' value='$row[naziv]'></td>";
		    	echo "<td><input type='text' name='opis' value='$row[opis]'></td>";
		    	echo "<td><input type='text' name='cijena' value='$row[cijena_po_jedinici]'></td>";
		    	echo "<td><input type='text' name='tip' value='$row[tip]'></td>";
		    	echo "<td><input type='text' name='slika' value='$row[slika]'></td>";
		    	echo "<td><button><a href=\"deleteProizvod.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button type='submit'>Save</button></td>";
		    	echo "</tr></form>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		
		echo "<br><br><form action='addProizvod.php' method='POST'>";
		echo "<fieldset style='width:400px'><legend>Dodaj novi proizvod:</legend>";
		echo "Naziv:<input type='text' name='naziv'><br>";
		echo "Opis:<input type='text' name='opis'><br>";
		echo "Cijena:<input type='text' name='cijena'><br>";
		echo "Tip:<input type='number' name='tip'><br>";
		echo "Slika:<input type='number' name='slika'><br>";
		echo "<button type='submit'>Add</button></fieldset></form>";

		$sql = "SELECT id, naslov, opis FROM post";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table  border='1'><tr><th>ID</th><th>NASLOV</th><th>OPIS</th><th>delete</th><th>save</th></tr>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><form action='postSave.php' method='POST'>";
		    	echo "<td><input style='width:25px' type='text' name='id' value='$row[id]'></td>";
		    	echo "<td><input type='text' name='naslov' value='$row[naslov]'></td>";
		    	echo "<td><textarea name='opis' rows='4' cols='50'>$row[opis]</textarea></td>";
		    	echo "<td><button><a href=\"deletePost.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button type='submit'>Save</button></td>";
		    	echo "</tr></form>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		echo "<br><br><form action='addPost.php' method='POST'>";
		echo "<fieldset style='width:400px'><legend>Dodaj novi post:</legend>";
		echo "Naslov:<input type='text' name='naslov'><br>";
		echo "Opis:<textarea name='opis'></textarea><br>";
		echo "<button type='submit'>Add</button></fieldset></form>";
		$conn->close(); 
		?>

	</body>
</html>