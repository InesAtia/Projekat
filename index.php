<?php include 'header.php'; ?> 
<?php include 'conection.php'; ?>

<div class="container-fluid">
	<div class="slider-home">

		<h3 class="text-danger">Catering Pals</h3>
		<h4>Uz nas se bolje jede</h4>

		<img src="slike/paprika.png" class="img-fluid" width="70%">

	</div>

</div>

<div class="container-fluid galerija-home">

	<h1>Ponuda</h1>

	<?php
$sql = "SELECT * FROM proizvod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<a href="menu.php?id='.$row["id"].'"><img src="slike/ponuda/'.$row["foto"].'"></a>';

    }
} else {
    echo "0 results";
}
$conn->close();
?>





	
	<div class="container bg-light forma-home">
		<div class="row">
			<!--<div class="col-4 forma-slika">

				</div>

				<div class="col-8 p-4 forma-text">

					<h4 class="pb-3">Rezervacija</h4>

				<form>
					<div class="row ">

						<div class="col-4">
							<label>Broj mjesta</label>
							<input type="text" name="broj_mjesta" class="form-control">	
						</div>

						<div class="col-4">
							<label>Povod</label>
							<input type="text" name="povod" class="form-control">	
						</div>
						<div class="col-4">
							<label>Vrsta kuhinje</label>
							<input type="text" name="vrsta_kuhinje" class="form-control">	
						</div>
						<div class="col-12"> <hr> </div>

						<div class="col-3">
							<label>Vaše ime</label>
							<input type="text" name="vase_ime" class="form-control">	
						</div>
						<div class="col-3">
							<label>Telefon</label>
							<input type="text" name="telefon" class="form-control">	
						</div>
						<div class="col-6">
							<label>E-mail</label>
							<input type="email" name="email" class="form-control">	
						</div>
<div class="col-12"><hr></div>
						<div class="col-6">
							<label>Vrijeme rezervacije</label>
							<input type="text" name="vrijeme_rezervacije" class="form-control">	
						</div>
						<div class="col-6">
							<label>Datum</label>
							<input type="date" name="datum_rezervacije" class="form-control">	
						</div>
						<div class="col-12"> <hr> </div>
						<div class="col-12 text-right">
						<button type="submit" class="btn btn-danger">Rezerviši</button>
						</div>

					</div>



				</form>

				</div>-->

		</div>
		
	</div>
</div>

<div class="container">

<form id="kontaktiranje" name="kontaktFormaPocetna">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Kontakt</h3>

		</div>
		<div class="col-6 pb-3">
				<input type="text" name="ime" placeholder="Ime" ng-model="ImeKorisnika" class="form-control" id="imeKorisnika" ng-required="true">
				<span ng-show="kontaktFormaPocetna.ime.$dirty && kontaktFormaPocetna.ime.$error.required">Unesite ime</span>
		</div>


		<div class="col-6 pb-3">
			<textarea type="text" name="pitanje" placeholder="Pitanje" ng-model="Pitanje" class="form-control" id="porukaKorisnika" ng-required="true"></textarea>
			<span ng-show="kontaktFormaPocetna.pitanje.$dirty && kontaktFormaPocetna.pitanje.$error.required">Unesite Vašu poruku</span>
		</div>

		<div class="col-6">
			<input type="email" name="email" placeholder="E-mail" class="form-control" id="mailKorisnika" ng-model="EmailKorisnika" ng-required="true">	
			<span ng-show="kontaktFormaPocetna.email.$dirty && kontaktFormaPocetna.email.$error.required">Unesite email</span>
		</div>

		<div class="col-6">
		<button class="btn btn-danger" ng-disabled="kontaktFormaPocetna.$invalid" onclick="return kontaktiranjePocetna();" id="dugme">Pošalji upit</button>	
		</div>


	</div>
</form>
<br>
<br>
<br>
<div class="col-12" id="display" width="500px" height="70px"></div>

</div>


<div class="container-fluid my-5 p-0">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11509.256321484761!2d18.385192299999996!3d43.8493184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1523989924817" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

<?php include 'footer.php'; ?> 