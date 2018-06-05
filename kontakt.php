<?php include 'header.php'; ?> 



<div class="container-fluid mb-2 p-0">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11509.256321484761!2d18.385192299999996!3d43.8493184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1523989924817" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

<div class="container mb-2">

<form id="kontaktiranje2" name="kontaktForma">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Kontakt</h3>

		</div>
		<div class="col-6 pb-3">
				<input type="text" name="ime" placeholder="Ime" ng-model="KorisnikIme" class="form-control" id="imeKorisnika2" ng-required="true">
				<span ng-show="kontaktForma.ime.$dirty && kontaktForma.ime.$error.required">Unesite ime</span>
		</div>

		<div class="col-6 pb-3">
			<textarea type="text" name="pitanje" placeholder="Pitanje" ng-model="KontaktPitanje" class="form-control" id="porukaKorisnika2" ng-required="true"></textarea>
			<span ng-show="kontaktForma.pitanje.$dirty && kontaktForma.pitanje.$error.required">Unesite svoju poruku</span>
		</div>

		<div class="col-6">
			<input type="email" name="email" placeholder="E-mail" ng-model="KontaktEmail" class="form-control" id="mailKorisnika2" ng-required="true">
			<span ng-show="kontaktForma.email.$dirty && kontaktForma.email.$error.required">Unesite svoju email adresu</span>	
		</div>

		<div class="col-6">
		<button type="submit" class="btn btn-danger" ng-disabled="kontaktForma.$invalid" onclick="return kontaktiranje();" id="dugme2">Pošalji upit</button>	
		</div>


	</div>
</form>

<br>
<br>
<br>
<div class="col-12" id="display2" width="500px" height="70px"></div>


</div>

<?php include 'footer.php'; ?> 