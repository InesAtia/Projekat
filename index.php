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


	<h1>Izdvojeno iz ponude</h1>

	<?php
$sql = "SELECT * FROM menu";
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


</div>

<div class="container">

	<div ng-controller="kontakt">


<form name="kontaktFormaPocetna" action="contactForm.php" method="post">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Kontakt</h3>

		</div>
		<div class="col-6 pb-3">
				<input type="text" name="ime" placeholder="Ime" ng-model="ime" class="form-control" id="imeKorisnika" ng-required="true">
				<span ng-show="kontaktFormaPocetna.ime.$dirty && kontaktFormaPocetna.ime.$error.required">Unesite ime</span>
		</div>


		<div class="col-6 pb-3">
			<textarea type="text" name="pitanje" ng-model="pitanje" placeholder="Poruka"  class="form-control" id="porukaKorisnika" ng-required="true"></textarea>
			<span ng-show="kontaktFormaPocetna.pitanje.$dirty && kontaktFormaPocetna.pitanje.$error.required">Unesite Vašu poruku</span>
		</div>

		<div class="col-6">
			<input type="email" name="email" ng-model="email" placeholder="E-mail" class="form-control" id="mailKorisnika" ng-required="true">	
			<span ng-show="kontaktFormaPocetna.email.$dirty && kontaktFormaPocetna.email.$error.required">Unesite email</span>
		</div>

		<div class="col-6">
		<button class="btn btn-danger" type="submit" ng-disabled="kontaktFormaPocetna.$invalid" ng-click="sendMessage()">Pošalji upit</button>	
		</div>


	</div>
</form>

</div>

</div>

<div class="container-fluid my-5 p-0">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11509.256321484761!2d18.385192299999996!3d43.8493184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1523989924817" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

<?php include 'footer.php'; ?> 