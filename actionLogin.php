<!DOCTYPE html>
<html>
	<head>
		<title>Login action</title>
	</head>
	<body>

		<?php
		
		$mail = $_POST['email'];
		$sifra = $_POST['password'];						
		
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

		$query = "SELECT * FROM user WHERE email='$mail' and password = '$sifra'";
		$uloga = "SELECT * FROM user WHERE email='$mail' and password = '$sifra' and uloga_id = 1";
		$result = mysqli_query($conn,$query);
		$count  = mysqli_num_rows($result);
		$result1 = mysqli_query($conn,$uloga);
		$count1  = mysqli_num_rows($result1);

		if($count>0 AND $count1>0){
			header("Location: panel.php");
		}
		elseif ($count>0) {
		 	echo "You are successfully authenticated!<br><h1>Dobrodosli!</h1>";
		 } 
		else {
			echo "Invalid E-mail or Password!";
		}

		$conn->close();
		echo "<br><br><a href=\"index.php\">Pocetna</a>";
		?>

	</body>
</html>