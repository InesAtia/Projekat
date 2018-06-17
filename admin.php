<?php include 'header_admin.php'; ?> 
<?php include 'conection.php'; ?>

<?php  
/**
<div class="table-responsive-sm">
  <table class="table">

<?php
$sql = "SELECT * FROM proizvod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<tr>
<td>".$row["id"]."</td>
<td>".$row["naziv"]."</td>
<td>".$row["opis"]."</td>
<td>".$row["cijena_po_jedinici"]."</td>
<td>".$row["tip_proizvoda_id"]."</td>
<td><img width='100px' src='slike/".$row["foto"]."'></td>
        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


   
  </table>
</div>
**/
?>




	<!--<div class="container page">
		
   <h3>Proizvodi</h3>
		<hr>

	<form>
		<div class="row">
				<div class="col-12">
							<label>Naziv</label>
							<input type="text" name="Naziv" class="form-control">	
						</div>
		


		<div class="col-12">
			<label>Opis</label>
			<input type="text" name="opis" class="form-control">	
						</div>

		<div class="col-6">
			<label>Cijena</label>
			<input type="text" name="cijena" class="form-control">	
						</div>

		<div class="col-6">

				<label>Tip</label>
				<select class="form-control" name="tip">
			    <option value="kineska">Kineska</option>
			    <option value="meksicka">Meksička</option>
			    <option value="talijanska">Italijanska</option>
			    <option value="bosanska">Bosanska</option>
			  </select>
			</div>

		<div class="col-12"> <hr> </div>
		<div class="col-12">

			<button type="submit" class="btn btn-danger">Snimi</button>
		</div>

		</div>
	</form>	
	<br>
</div> -->

<div class="container-fluid">
	<div class="row">
	
		<div id="adminPrvi" class="col-12">

<?php 
		//Ispis korisnika iz baze, editovanje i brisanje korisnika
		$sql = "SELECT id, username, password, ime, prezime FROM user";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table  class='table table-hover table-responsive'>
		    	<thead>
    			<tr>
     			<th scope='col'>ID</th>
      			<th scope='col'>USERNAME</th>
      			<th scope='col'>PASSWORD</th>
      			<th scope='col'>IME</th>
      			<th scope='col'>PREZIME</th>
      			<th scope='col'>DELETE</th>
      			<th scope='col'>SAVE</th>
    			</tr>
  				</thead>";
  				echo "<tbody>";
		    while($row = $result->fetch_assoc()) {
		    	
		    	echo "<tr><form action='adminSave.php' method='POST'>";
		    	echo "<td><input style='width:25px' type='text' name='id' value='$row[id]' class='adminInput'></td>";
		    	echo "<td><input type='text' name='korisnikUsername' value='$row[username]' class='adminInput'></td>";
		    	echo "<td><input type='text' name='korisnikPassword' value='$row[password]' class='adminInput'></td>";
		    	echo "<td><input type='text' name='korisnikIme' value='$row[ime]' class='adminInput'></td>";
		    	echo "<td><input type='text' name='korisnikPrezime' value='$row[prezime]' class='adminInput'></td>";
		    	echo "<td><button class='btn btn-danger' id='adminDelete'><a href=\"delete.php?id=".$row['id']."\">Delete</a></button></td>";
		    	echo "<td><button class='btn btn-success' type='submit'>Save</button></td>";
		    	echo "</form></tr>";
		    	
		    }
		    echo "</tbody>";
		    echo "</table>";
		} else {
		    echo "0 results";
		}

		//Dodavanje novog korisnika od strane admina
		?>
		</div>
		

		<div class="col-6">
		<?php

		echo "<br><br><form action='actionReg.php' method='POST'>";
		echo "<h5>Dodaj novog korisnika:</h5>";
		

		echo "<label>Ime:*</label>";
		echo "<input type='text' name='korisnikIme' class='form-control' required>";
		
		echo "<label>Prezime:*</label>";
		echo "<input type='text' name='korisnikPrezime' class='form-control' required>";
		
		echo "<label>Username:*</label>";
		echo "<input type='text' name='korisnikUsername' class='form-control' required>";
		
		echo "<label>Password:*</label>";
		echo "<input type='text' name='korisnikPassword' class='form-control' required>";
		
		echo "<label>E-mail:*</label>";
		echo "<input type='text' name='korisnikEmail' class='form-control' required>";
		
		echo "<label>Država:*</label>";
		echo "<input type='text' name='korisnikDrzava' class='form-control' required>";
		
		echo "<label>Grad:*</label>";
		echo "<input type='text' name='korisnikGrad' class='form-control' required>";
		
		echo "<label>Adresa:*</label>";
		echo "<input type='text' name='korisnikAdresa' class='form-control' required>";
		
		echo "<label>Telefon:*</label>";
		echo "<input type='text' name='korisnikTelefon' class='form-control' required>";
		
		echo "<label>Broj kartice:*</label>";
		echo "<input type='number' name='brojKartice' class='form-control' required>";
		
		echo "<label>Tip kartice:*</label>";
		echo "<select class='form-control form-control-sm' name='tipKartice' required>
  				<option>Visa</option>
  				<option>MasterCard</option>
  				<option>Maestro</option>
  				<option>AmericanExpress</option>
			</select>";
		
		echo "<label>Ime na kartici:*</label>";
		echo "<input type='text' name='imeKartice' class='form-control'";
		
		echo "<label>Datum isteka kartice:*</label>";
		echo "<input type='date' class='form-control form-control-sm' name='datumKartice'>";

		echo "<input type='hidden' name='ulogaId'";

		echo "<br><br><button type='submit' class='btn btn-danger'>Dodaj korisnika</button></form>";
		?>
		<br>
		</div>
		

		

		<div class="col-4">
			<div id="adminDrugi">
		<?php
		echo "<br><br><h5>Podešavanja</h5>";

		//Mijenjanje title, i ostala podesavanja na stranici(Tabela: podesavanja)
		$sql = "SELECT id,title FROM podesavanja";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table class='table table-sm'>
		    		<thead>
    				<tr>
    				<th scope='col'>ID</th>
    				<th scope='col'>TITLE</th>
      				<th scope='col'>SAVE</th>
      				</tr>
      				</thead>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><form action='podesavanjaSave.php' method='POST'>";
		    	echo "<td><input style='width:25px' type='hidden' name='id' value='$row[id]' class='adminInput'></td>";
		    	echo "<td><input type='text' name='title' value='$row[title]' class='adminInput'></td>";
		    	echo "<td><button type='submit' class='btn btn-success'>Save</button></td>";
		    	echo "</tr></form>";
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


<?php include 'footer_admin.php'; ?> 

