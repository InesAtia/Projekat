<!DOCTYPE html>
<html>
	<head>
		<title>Registration action</title>
	</head>
	<body>

		<?php
		
		$naziv = $_GET['naziv'];						
		$cijena = $_GET['cijena'];		
		$tip = $_GET['tip'];
		$user = 1;
		$vrijeme = date("Y-m-d H:i:s");
		

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

		$query = "INSERT INTO narudzba (naziv, tip, cijena_po_jedinici,  vrijeme, user_id) VALUES ('$naziv', '$tip', '$cijena', '$vrijeme', '$user')";

		if(mysqli_query($conn,$query)){
		echo "Narudzba inserted successfully";}
		else{
		echo "Narudzba insertion failed!";}

		$conn->close();
		echo "<br><br><a href=\"prikazProizvoda.php\">Nazad</a>";
		?>

	</body>
</html>