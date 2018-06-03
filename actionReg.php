<!DOCTYPE html>
<html>
	<head>
		<title>Registration action</title>
	</head>
	<body>

		<?php
		
		$nick = $_POST['korisnikUsername'];
		$sifra = $_POST['korisnikPassword'];						
		$ime = $_POST['korisnikIme'];		
		$prezime = $_POST['korisnikPrezime'];
		$drzava = $_POST['korisnikDrzava'];	
		$grad = $_POST['korisnikGrad'];
		$adresa = $_POST['korisnikAdresa'];
		$telefon = $_POST['korisnikTelefon'];			
		$mail = $_POST['korisnikEmail'];
		$brojKartice = $_POST['brojKartice'];
		$tipKartice = $_POST['tipKartice'];	
		$imeKartice = $_POST['imeKartice'];
		$datumKartice = $_POST['datumKartice'];
		$godinaKartice = $_POST['godinaKartice'];
		$ulogaID = 3;

		echo "<b>Uneseni username je: </b>" . $nick . "<br>";
		echo "<b>Uneseni password je: </b>" . $sifra . "<br>";
		echo "<b>Uneseno ime je: </b>" . $ime . "<br>";
		echo "<b>Uneseno prezime je: </b>" . $prezime . "<br>";
		echo "<b>Unesena drzava je: </b>" . $drzava . "<br>";
		echo "<b>Uneseni grad je: </b>" . $grad . "<br>";
		echo "<b>Unesena adresa je: </b>" . $adresa . "<br>";
		echo "<b>Uneseni telefon je: </b>" . $telefon . "<br>";
		echo "<b>Uneseni email je: </b>" . $mail . "<br>";	
		echo "<b>Uneseni brojKartice je: </b>" . $brojKartice . "<br>";
		echo "<b>Uneseni tipKartice je: </b>" . $tipKartice . "<br>";
		echo "<b>Uneseno imeKartice je: </b>" . $imeKartice . "<br>";
		echo "<b>Uneseni datumKartice je: </b>" . $datumKartice . "<br>";
		echo "<b>Unesena godinaKartice je: </b>" . $godinaKartice . "<br>";
		echo "<b>Unesena uloga je: </b>" . $ulogaID . "<br>";	

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

		$query = "INSERT INTO user (username, password, ime, prezime, drzava, grad, adresa, telefon, email, broj_kartice, tip_kartice, ime_na_kartici, mjesec, godina, uloga_id) VALUES ('$nick', '$sifra', '$ime', '$prezime', '$drzava', '$grad', '$adresa', '$telefon', '$mail', '$brojKartice', '$tipKartice', '$imeKartice', '$datumKartice', '$godinaKartice', '$ulogaID')";

		if(mysqli_query($conn,$query)){
		echo "Record inserted successfully";}
		else{
		echo "Record insertion failed!";}

		$conn->close();
		echo "<br><br><a href=\"index.php\">Pocetna</a>";
		?>

	</body>
</html>