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





<?php include 'footer_admin.php'; ?> 

