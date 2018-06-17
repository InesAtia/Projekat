<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login action</title>
	</head>
	<body>

		<?php

		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		
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
		$result = mysqli_query($conn,$query);
		$count  = mysqli_num_rows($result);
		$row = mysqli_fetch_row($result);
		
		if($count>0 AND $row[14]==1){
			$_SESSION["uloga"] = $row[0];
			header("Location: admin.php");
		}
		elseif ($count>0 AND $row[14]==2) {
			$_SESSION["uloga"] = $row[0];
		 	header("Location: osoblje.php");
		 }
	 	elseif ($count>0 AND $row[14]==3) {
	 		$_SESSION["uloga"] = $row[0];
	 		header("Location: korisnik.php");
	 	}  
		else {
			echo "Invalid E-mail or Password!";
		}


		$conn->close();
		echo "<br><br><a href=\"index.php\">Pocetna</a>";
		?>

	</body>
</html>