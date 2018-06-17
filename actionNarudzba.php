
<?php include 'header_korisnik.php'; ?> 
		<?php

		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
		
		
		$naziv = $_GET['naziv'];
		$cijena = $_GET['cijena'];	
		$tip = $_GET['tip'];
		$user = $_GET['uloga'];
		$vrijeme = date('Y-m-d H:i:s');
		$status = 0;
		

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

		$query = "INSERT INTO narudzba (naziv, tip, cijena_po_jedinici, vrijeme, status, user_id) VALUES ('$naziv', '$tip', '$cijena', '$vrijeme', '$status', '$user')";

		if(mysqli_query($conn,$query)){
		echo "Hvala Vam, narudžba je bila uspješna.";}
		else{
		echo "Došlo je do greške. Pokušajte ponovo";}

		$conn->close();
		echo "<br><br><a href=\"korisnik.php\">Nazad</a>";
		?>

	<?php include 'footer_admin.php'; ?> 