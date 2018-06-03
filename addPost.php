<!DOCTYPE html>
<html>
	<head>
		<title>Add Post</title>
	</head>
	<body>

		<?php
		
		$naslov = $_POST['naslov'];
		$opis = $_POST['opis'];						

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

		$query = "INSERT INTO post (naslov, opis) VALUES ('$naslov', '$opis')";

		if(mysqli_query($conn,$query)){
		echo "Post inserted successfully";}
		else{
		echo "Post insertion failed!";}

		$conn->close();
		echo "<br><br><a href=\"osoblje.php\">Nazad</a>";
		?>

	</body>
</html>