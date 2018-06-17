<?php
// Start the session
session_start();
?>
<?php include 'header_korisnik.php'; ?> 
<?php include 'conection.php'; ?>

<div class="container-fluid">
	<div class="row">


<?php

		//Kreiranje narudzbe od strane korisnika, unos u bazu, zapis koji korisnik je narucio preko sessije
		$sql = "SELECT naziv, opis, cijena_po_jedinici, tip, slika FROM proizvod";
		$result = $conn->query($sql);
		$uloga = $_SESSION["uloga"];

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table class='table table-hover' id='proizvodi'>
		    	<thead>
    			<tr>
    			<th scope='col'>SLIKA</th>
      			<th scope='col'>NAZIV</th>
      			<th scope='col'>OPIS</th>
      			<th scope='col'>CIJENA</th>
      			<th scope='col'>TIP</th>
      			<th scope='col'>NARUDŽBA</th>
				</tr>
  				</thead>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tbody>";
		    	echo "<tr>";
		    	echo "<td><img src='proizvodi/$row[slika]'</td>";
		    	echo "<td>$row[naziv]</td>";
		    	echo "<td><p>$row[opis]</p></td>";
		    	echo "<td><p>$row[cijena_po_jedinici]</p></td>";
		    	echo "<td><p>$row[tip]</p></td>";
		    	echo "<td><a href='actionNarudzba.php?naziv=$row[naziv]&cijena=$row[cijena_po_jedinici]&tip=$row[tip]&uloga=$uloga'>Naruci</a></td>";
		    	echo "</tr></form>";
		    	echo "</tbody>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}


		$conn->close(); 
		?>

</div>
</div>

<?php include 'footer_admin.php'; ?> 