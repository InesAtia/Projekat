<?php include 'header_osoblje.php'; ?> 
<?php include 'conection.php'; ?>


<div class="container-fluid">
	<div class="row">

		<div id="osobljePrvi">
		<div class="col-12">
			

<?php
		//Ispis svih proizvoda iz baze, editovanje i brisanje proizvoda
		$sql = "SELECT id, naziv, opis, cijena_po_jedinici, tip, slika FROM proizvod";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table class='table table-hover'>
		    	<thead>
    			<tr>
    			<th scope='col'>ID</th>
      			<th scope='col'>NAZIV</th>
      			<th scope='col'>OPIS</th>
      			<th scope='col'>CIJENA</th>
      			<th scope='col'>TIP</th>
      			<th scope='col'>SLIKA</th>
      			<th scope='col'>DELETE</th>
      			<th scope='col'>SAVE</th>
    			</tr>
  				</thead>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tbody>";
		    	echo "<tr><form action='osobljeSave.php' method='POST'>";
		    	echo "<td><input class='osobljeInput' style='width:25px' type='text' name='id' value='$row[id]'></td>";
		    	echo "<td><input class='osobljeInput' type='text' name='naziv' value='$row[naziv]'></td>";
		    	echo "<td><input class='osobljeInput' type='text' name='opis' value='$row[opis]'></td>";
		    	echo "<td><input class='osobljeInput' type='text' name='cijena' value='$row[cijena_po_jedinici]'></td>";
		    	echo "<td><input class='osobljeInput' type='text' name='tip' value='$row[tip]'></td>";
		    	echo "<td><input class='osobljeInput' type='text' name='slika' value='$row[slika]'></td>";
		    	echo "<td><button class='btn btn-danger osobljeDelete'><a href=\"deleteProizvod.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button class='btn btn-success'type='submit'>Save</button></td>";
		    	echo "</tr></form>";
		    	echo "</tbody>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		?>
		</div>



		<div class="col-4">
		<?php

		//Dodavanje novih proizvoda u bazu podatak od strane osoblja
		echo "<br><br><form action='addProizvod.php' method='POST'>";
		echo "<h5>Dodaj novi proizvod:</h5>";
		
		
		echo "<label>Naziv:</label>";
		echo "<input type='text' name='naziv' class='form-control'>";

		echo "<label>Opis:</label>";
		echo "<input type='text' name='opis' class='form-control'>";

		echo "<label>Cijena:</label>";
		echo "<input type='text' name='cijena' class='form-control'>";

		echo "<label>Tip:</label>";
		echo "<input type='text' name='tip' class='form-control'>";
		
		echo "<label>Slika:</label>";
		echo "<input type='text' name='slika' class='form-control'>";
		echo "<br><button class='btn btn-success' type='submit'>Add</button></form>";

		?>

		</div>

		</div>


		<div id="osobljeDrugi">
		<div class="col-12">
		<?php

		//Ispis postova iz baze, editovanje i brisanje postova
		$sql = "SELECT id, naslov, opis FROM post";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		   echo "<table class='table table-hover'>
		    	<thead>
    			<tr>
    			<th scope='col'>ID</th>
      			<th scope='col'>NASLOV</th>
      			<th scope='col'>OPIS</th>
      			<th scope='col'>DELETE</th>
      			<th scope='col'>SAVE</th>
				</tr>
  				</thead>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tbody>";
		    	echo "<tr><form action='postSave.php' method='POST'>";
		    	echo "<td><input class='osobljeInput' style='width:25px' type='text' name='id' value='$row[id]'></td>";
		    	echo "<td><input  class='osobljeInput' type='text' name='naslov' value='$row[naslov]'></td>";
		    	echo "<td><textarea class='osobljeInput' name='opis' rows='4' cols='50'>$row[opis]</textarea></td>";
		    	echo "<td><button class='btn btn-danger osobljeDelete'><a href=\"deletePost.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button class='btn btn-success' type='submit'>Save</button></td>";
		    	echo "</tr></form>";
		    	echo "</tbody>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		?>
		</div>

		<div class="col-4">
		<?php

		//Dodavanje novih postova
		echo "<br><br><form action='addPost.php' method='POST'>";


		echo "<h5>Dodaj novi post:</h5>";

		echo "<label>Naslov:</label>";
		echo "<input type='text' name='naslov' class='form-control'>";

		echo "<label>Opis:</label>";
		echo "<textarea name='opis' class='form-control'></textarea>";
		echo "<br><button class='btn btn-success' type='submit'>Add</button></form><br><br>";
		?>
		</div>


		</div>

		<div id="osobljeTreci">

		<div class="col-12">
		<?php


		//Ispis narudzbi na osoblje panelu, i omogućavanje promijenu statusa narudzbe na 1 tj. obradjena narudzba (0 znaci da je podnesen zahtijev za narudzbom, a 1 je da je zavrsena)
		//Brisanje narudzbi, spasavanje promjene statusa (znaci nema edita ostalih polja osim STATUS-a)
		$sql = "SELECT id, naziv, tip, cijena_po_jedinici, vrijeme, status, user_id FROM narudzba";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table class='table table-hover'>
		    	<thead>
    			<tr>
    			<th scope='col'>ID</th>
      			<th scope='col'>NAZIV</th>
      			<th scope='col'>CIJENA</th>
      			<th scope='col'>VRIJEME</th>
      			<th scope='col'>USER</th>
      			<th scope='col'>PROMIJENI</th>
      			<th scope='col'>DELETE</th>
      			<th scope='col'>SAVE</th>
				</tr>
  				</thead>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tbody>";
		    	echo "<td>$row[id]</td>";
		    	echo "<td>$row[naziv]</td>";
		    	echo "<td>$row[tip]</td>";
		    	echo "<td>$row[cijena_po_jedinici]</td>";
		    	echo "<td>$row[vrijeme]</td>";
		    	echo "<td>$row[status]</td>";
		    	echo "<td>$row[user_id]</td>";
		    	echo "<td><input class='osobljeInput' type='checkbox' name='naslov' value='$row[status]'></td>";
		    	echo "<td><button class='btn btn-danger osobljeDelete'><a href=\"deletePost.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button class='btn btn-success osobljeSave'><a href=\"statusSave.php?id=".$row['id']."\">Save</a></button></td>";
		    	echo "</tr>";
		    	echo "</tbody>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}



		?>

		</div>

		</div>

		
		<div id="osobljeCetvrti">
			<div class="col-12">
			<?php
			$sql = "SELECT id, ime, email_korisnika, poruka FROM kontakt_poruka";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

			echo "<table class='table table-hover'>
		    	<thead>
    			<tr>
    			<th scope='col'>ID</th>
      			<th scope='col'>IME</th>
      			<th scope='col'>EMAIL</th>
      			<th scope='col'>PORUKA</th>
      			</tr>
  				</thead>";
  				while($row = $result->fetch_assoc()) {
  				echo "<tbody>";
		    	echo "<td>$row[id]</td>";
		    	echo "<td>$row[ime]</td>";
		    	echo "<td>$row[email_korisnika]</td>";
		    	echo "<td>$row[poruka]</td>";
		    	echo "<td><button class='btn btn-danger osobljeDelete'><a href=\"deleteMessage.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "</tr>";
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

</div>
</div>

<?php include 'footer_osoblje.php'; ?> 

