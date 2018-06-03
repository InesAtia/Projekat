<!DOCTYPE html>
<html>
	<head>
		<title>Add Proizvod</title>
	</head>
	<body>

		<?php
		
		$naziv = $_POST['naziv'];
		$opis = $_POST['opis'];						
		$cijena = $_POST['cijena'];		
		$tip = $_POST['tip'];
		$slika = $_POST['slika'];

		//RAD S BAZOM
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

		$query = "INSERT INTO proizvod (naziv, opis, cijena_po_jedinici, tip, slika) VALUES ('$naziv', '$opis', '$cijena', '$tip', '$slika')";

		if(mysqli_query($conn,$query)){
		echo "Proizvod inserted successfully";}
		else{
		echo "Proizvod insertion failed!";}

		$conn->close();
		echo "<br><br><a href=\"osoblje.php\">Nazad</a>";
		?>

	</body>
</html>