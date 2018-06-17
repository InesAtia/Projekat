<?php include 'header.php'; ?>


<div class="container mb-2">
	<div ng-controller="myCtrl">


<form name="korisnikForma" action="actionReg.php" method="post">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Registracija</h3>

		<p>Polja sa * su obavezna</p>

		</div>
			
		<!--AngularJS verifikacija forme u svakom polju pojedinacno-->
		<div class="col-6 pb-3">
			<label>Ime:*</label>
				<input type="text" name="korisnikIme" ng-model="korisnikIme" class="form-control" ng-minlength="2" ng-required="true">
				<span ng-show="korisnikForma.korisnikIme.$dirty && korisnikForma.korisnikIme.$error.required">Unesite ime</span>
				<span ng-show="korisnikForma.korisnikIme.$dirty && korisnikForma.korisnikIme.$error.minlength">Ime je prekratko</span>

				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>Prezime:*</label>
				<input type="text" name="korisnikPrezime" ng-model="korisnikPrezime" class="form-control" ng-minlength="2" ng-required="true">
				<span ng-show="korisnikForma.korisnikPrezime.$dirty && korisnikForma.korisnikPrezime.$error.required">Unesite prezime</span>
				<span ng-show="korisnikForma.korisnikPrezime.$dirty && korisnikForma.korisnikPrezime.$error.minlength">Prezime je prekratko</span>

				
		</div>

		<div class="col-6 pb-3">
			<label>Username:*</label>
				<input type="text" name="korisnikUsername" ng-model="korisnikUsername" class="form-control" ng-minlength="3" ng-required="true">
				<span ng-show="korisnikForma.korisnikUsername.$dirty && korisnikForma.korisnikUsername.$error.required">Unesite username</span>
				<span ng-show="korisnikForma.korisnikUsername.$dirty && korisnikForma.korisnikUsername.$error.minlength">Username mora imati najmanje 3 slova</span>
				
				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>E-mail adresa:*</label>
				<input type="email" name="korisnikEmail" ng-model="korisnikEmail" class="form-control" ng-required="true">
				<span ng-show="korisnikForma.korisnikEmail.$dirty && korisnikForma.korisnikEmail.$error.required">Unesite email</span>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label> Lozinka (minimalno 8 karaktera):*</label>
				<input type="password" name="korisnikPassword" ng-model="korisnikPassword" class="form-control" ng-required="true" ng-minlength="8">
				<span ng-show="korisnikForma.korisnikPassword.$dirty && korisnikForma.korisnikPassword.$error.required">Unesite password</span>
				<span ng-show="korisnikForma.korisnikPassword.$dirty && korisnikForma.korisnikPassword.$error.minlength">Username mora imati najmanje 8 znakova</span>

				
		</div>

		
		<div class="col-6 pb-3">
			<label>Adresa:*</label>
				<input type="text" name="korisnikAdresa" ng-model="korisnikAdresa" class="form-control" ng-required="true">
				<span ng-show="korisnikForma.korisnikAdresa.$dirty && korisnikForma.korisnikAdresa.$error.required">Unesite adresu</span>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Grad:*</label>
				<input type="text" name="korisnikGrad" ng-model="korisnikGrad" class="form-control" ng-required="true" ng-minlength="2">
				<span ng-show="korisnikForma.korisnikGrad.$dirty && korisnikForma.korisnikGrad.$error.required">Unesite grad</span>
				<span ng-show="korisnikForma.korisnikGrad.$dirty && korisnikForma.korisnikGrad.$error.minlength">Ime grada mora imati najmanje 2 slova</span>

				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Država:*</label>	
				<input type="text" name="korisnikDrzava" ng-model="korisnikDrzava" class="form-control" ng-required="true" ng-minlength="3">
				<span ng-show="korisnikForma.korisnikDrzava.$dirty && korisnikForma.korisnikDrzava.$error.required">Unesite državu</span>
				<span ng-show="korisnikForma.korisnikDrzava.$dirty && korisnikForma.korisnikDrzava.$error.minlength">Ime države mora imati najmanje 3 slova</span>

				
		</div>

		
		<div class="col-6 pb-5">
			<label>Telefon:*</label>
			<input type="text" name="korisnikTelefon" ng-model="korisnikTelefon" class="form-control" ng-required="true" ng-minlength="6">
				<span ng-show="korisnikForma.korisnikTelefon.$dirty && korisnikForma.korisnikTelefon.$error.required">Unesite broj telefona</span>
				<span ng-show="korisnikForma.korisnikTelefon.$dirty && korisnikForma.korisnikTelefon.$error.minlength">Broj telefona mora imati najmanje 6 brojeva</span>
			
				
		</div>

		<!--Informacije o placanju-->
		<div class="col-6 pb-3">
			<label>Broj kartice (ukucajte samo brojeve, bez znakova):*</label>	
			<input type="number" name="brojKartice" ng-model="brojKartice" class="form-control" ng-required="true" ng-minlength="16">
				<span ng-show="korisnikForma.brojKartice.$dirty && korisnikForma.brojKartice.$error.required"></span>
				<span ng-show="korisnikForma.brojKartice.$dirty && korisnikForma.brojKartice.$error.minlength">Unesite svih 16 brojeva</span>

			
		</div>

		<div class="col-6 pb-3">
			<label>Tip kartice:*</label>
			<input type="text" class="form-control form-control-sm" name="tipKartice" ng-model="tipKartice" ng-required="true">
  				
				<span ng-show="korisnikForma.tipKartice.$dirty && korisnikForma.tipKartice.$error.required">Unesite tip kartice</span>	
			
			
		</div>

		<div class="col-6 pb-3">
			<label>Ime na kartici:*</label>
			<input type="text" name="imeKartice" ng-model="imeKartice" class="form-control" ng-required="true" ng-minlength="4">
				<span ng-show="korisnikForma.imeKartice.$dirty && korisnikForma.imeKartice.$error.required">Unesite puno ime</span>
				<span ng-show="korisnikForma.imeKartice.$dirty && korisnikForma.imeKartice.$error.minlength">Puno ime mora imati najmanje 4 slova</span>
			
			
		</div>

		

		<div class="col-3 pb-3">
			<label> Datum isteka kartice:*</label>
			<input type="date" class="form-control form-control-sm" name="datumKartice" ng-model="datumKartice" ng-required="true">
  			<span ng-show="korisnikForma.datumKartice.$dirty && korisnikForma.datumKartice.$error.required">Odaberite jednu opciju</span>
			
			
		</div>

		

		<input type="hidden" name="ulogaId" ng-model="ulogaId">

		<div class="col-6 pt-5">
			
			<button class="btn btn-danger" type="submit" name="registracija" ng-disabled="korisnikForma.$invalid" ng-click="insertData()">Registrirajte se</button>	

		
		</div> 





	</div>

		
	
</form>
</div>


</div>


<?php include 'footer.php'; ?> 