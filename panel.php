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
		    echo "<table  border='1'><tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>IME</th><th>PREZIME</th><th>delete</th><th>save</th></tr>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><form action='adminSave.php' method='POST'>";
		    	echo "<td><input style='width:25px' type='text' name='id' value='$row[id]'></td>";
		    	echo "<td><input type='text' name='korisnikUsername' value='$row[username]'></td>";
		    	echo "<td><input type='text' name='korisnikPassword' value='$row[password]'></td>";
		    	echo "<td><input type='text' name='korisnikIme' value='$row[ime]'></td>";
		    	echo "<td><input type='text' name='korisnikPrezime' value='$row[prezime]'></td>";
		    	echo "<td><button><a href=\"delete.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button type='submit'>Save</button></td>";
		    	echo "</tr></form>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		echo "<br><br><form action='actionReg.php' method='POST'>";
		echo "<fieldset style='width:400px'><legend>Dodaj novog korisnika:</legend>";
		echo "Ime:<input type='text' name='korisnikIme' required><br>";
		echo "Prezime:<input type='text' name='korisnikPrezime' required><br>";
		echo "Username:<input type='text' name='korisnikUsername' required><br>";
		echo "Password:<input type='text' name='korisnikPassword' required><br>";
		echo "E-mail:<input type='text' name='korisnikEmail' required><br>";
		echo "Drzava:<input type='text' name='korisnikDrzava' required><br>";
		echo "Grad:<input type='text' name='korisnikGrad' required><br>";
		echo "Adresa:<input type='text' name='korisnikAdresa' required><br>";
		echo "Telefon:<input type='text' name='korisnikTelefon' required><br>";
		echo "Broj kartice:<input type='number' name='brojKartice' required min='16'><br>";
		echo "Tip kartice:<select name='tipKartice' class='form-control' required>
				<option>Visa</option>
  				<option>MasterCard</option>
  				<option>Maestro</option>
  				<option>AmericanExpress</option>
				</select><br>";
		echo "Ime na kartici:<input type='text' name='imeKartice' required><br>";
		echo "Mjesec isteka:<select name='datumKartice' required>
  				<option>Januar</option>
  				<option>Februar</option>
  				<option>Mart</option>
  				<option>April</option>
  				<option>Maj</option>
  				<option>Juni</option>
  				<option>Juli</option>
  				<option>August</option>
				<option>Septembar</option>
  				<option>Oktobar</option>
  				<option>Novembar</option>
  				<option>Decembar</option>
			</select><br>";
		echo "Godina isteka:<select name='godinaKartice' required>
  				<option>2018</option>
  				<option>2019</option>
  				<option>2020</option>
  				<option>2021</option>
  				<option>2022</option>
  				<option>2023</option>
  				<option>2024</option>
  				<option>2025</option>
			</select><br>";
		echo "<button type='submit'>Add</button></fieldset></form>";

		$conn->close(); 
		?>

	</body>
</html>