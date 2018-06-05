<?php include 'header.php'; ?>

<div class="container mb-2">


<form name="korisnikForma" action="actionReg.php" method="POST">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Registracija</h3>

		<p>Polja sa * su obavezna</p>

		</div>
			<!--AngularJS verifikacija forme u svakom polju pojedinacno-->
		<div class="col-6 pb-3">
			<label>Ime:*</label>
				<input type="text" name="korisnikIme" ng-model="Ime" class="form-control" ng-minlength="2" ng-required="true">
				<span ng-show="korisnikForma.korisnikIme.$dirty && korisnikForma.korisnikIme.$error.required">Unesite ime</span>
				<span ng-show="korisnikForma.korisnikIme.$dirty && korisnikForma.korisnikIme.$error.minlength">Ime je prekratko</span>

				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>Prezime:*</label>
				<input type="text" name="korisnikPrezime" ng-model="Prezime" class="form-control" ng-minlength="2" ng-required="true">
				<span ng-show="korisnikForma.korisnikPrezime.$dirty && korisnikForma.korisnikPrezime.$error.required">Unesite prezime</span>
				<span ng-show="korisnikForma.korisnikPrezime.$dirty && korisnikForma.korisnikPrezime.$error.minlength">Prezime je prekratko</span>

				
		</div>

		<div class="col-6 pb-3">
			<label>Username:*</label>
				<input type="text" name="korisnikUsername" ng-model="Username" class="form-control" ng-minlength="3" ng-required="true">
				<span ng-show="korisnikForma.korisnikUsername.$dirty && korisnikForma.korisnikUsername.$error.required">Unesite username</span>
				<span ng-show="korisnikForma.korisnikUsername.$dirty && korisnikForma.korisnikUsername.$error.minlength">Username mora imati najmanje 3 slova</span>
				
				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>E-mail adresa:*</label>
				<input type="email" name="korisnikEmail" ng-model="Email" class="form-control" ng-required="true">
				<span ng-show="korisnikForma.korisnikEmail.$dirty && korisnikForma.korisnikEmail.$error.required">Unesite email</span>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label> Lozinka (minimalno 8 karaktera):*</label>
				<input type="password" name="korisnikPassword" ng-model="Password" class="form-control" ng-required="true" ng-minlength="8">
				<span ng-show="korisnikForma.korisnikPassword.$dirty && korisnikForma.korisnikPassword.$error.required">Unesite password</span>
				<span ng-show="korisnikForma.korisnikPassword.$dirty && korisnikForma.korisnikPassword.$error.minlength">Username mora imati najmanje 8 znakova</span>

				
		</div>

		
		<div class="col-6 pb-3">
			<label>Adresa:*</label>
				<input type="text" name="korisnikAdresa" ng-model="Adresa" class="form-control" ng-required="true">
				<span ng-show="korisnikForma.korisnikAdresa.$dirty && korisnikForma.korisnikAdresa.$error.required">Unesite adresu</span>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Grad:*</label>
				<input type="text" name="korisnikGrad" ng-model="Grad" class="form-control" ng-required="true" ng-minlength="2">
				<span ng-show="korisnikForma.korisnikGrad.$dirty && korisnikForma.korisnikGrad.$error.required">Unesite grad</span>
				<span ng-show="korisnikForma.korisnikGrad.$dirty && korisnikForma.korisnikGrad.$error.minlength">Ime grada mora imati najmanje 2 slova</span>

				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Država:*</label>	
				<input type="text" name="korisnikDrzava" ng-model="Drzava" class="form-control" ng-required="true" ng-minlength="3">
				<span ng-show="korisnikForma.korisnikDrzava.$dirty && korisnikForma.korisnikDrzava.$error.required">Unesite državu</span>
				<span ng-show="korisnikForma.korisnikDrzava.$dirty && korisnikForma.korisnikDrzava.$error.minlength">Ime države mora imati najmanje 3 slova</span>

				
		</div>

		
		<div class="col-6 pb-5">
			<label>Telefon:*</label>
			<input type="text" name="korisnikTelefon" ng-model="Telefon" class="form-control" ng-required="true" ng-minlength="6">
				<span ng-show="korisnikForma.korisnikTelefon.$dirty && korisnikForma.korisnikTelefon.$error.required">Unesite broj telefona</span>
				<span ng-show="korisnikForma.korisnikTelefon.$dirty && korisnikForma.korisnikTelefon.$error.minlength">Broj telefona mora imati najmanje 6 brojeva</span>
			
				
		</div>

		<!--Informacije o placanju-->
		<div class="col-6 pb-3">
			<label>Broj kartice (ukucajte samo brojeve, bez znakova):*</label>	
			<input type="number" name="brojKartice" ng-model="Kartica" class="form-control" ng-required="true" ng-minlength="16">
				<span ng-show="korisnikForma.brojKartice.$dirty && korisnikForma.brojKartice.$error.required"></span>
				<span ng-show="korisnikForma.brojKartice.$dirty && korisnikForma.brojKartice.$error.minlength">Unesite svih 16 brojeva</span>

			
		</div>

		<div class="col-6 pb-3">
			<label>Tip kartice (odaberite):*</label>
			<select class="form-control form-control-sm" name="tipKartice" ng-model="KarticaTip" ng-required="true">
  				<option>Visa</option>
  				<option>MasterCard</option>
  				<option>Maestro</option>
  				<option>AmericanExpress</option>
			</select>
				<span ng-show="korisnikForma.tipKartice.$dirty && korisnikForma.tipKartice.$error.required">Odaberite jednu opciju</span>	
			
			
		</div>

		<div class="col-6 pb-3">
			<label>Ime na kartici:*</label>
			<input type="text" name="imeKartice" ng-model="KarticaIme" class="form-control" ng-required="true" ng-minlength="4">
				<span ng-show="korisnikForma.imeKartice.$dirty && korisnikForma.imeKartice.$error.required">Unesite puno ime</span>
				<span ng-show="korisnikForma.imeKartice.$dirty && korisnikForma.imeKartice.$error.minlength">Puno ime mora imati najmanje 4 slova</span>
			
			
		</div>

		

		<div class="col-3 pb-3">
			<label> Datum isteka kartice:*</label>
			<select class="form-control form-control-sm" name="datumKartice" ng-model="KarticaDatum" ng-required="true">
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
			</select>
				<span ng-show="korisnikForma.datumKartice.$dirty && korisnikForma.datumKartice.$error.required">Odaberite jednu opciju</span>
			
			
		</div>

		<div class="col-3 pb-3">
			<label> Godina isteka kartice:*</label>
			<select class="form-control form-control-sm" name="godinaKartice" ng-model="KarticaGodina" ng-required="true">
  				<option>2018</option>
  				<option>2019</option>
  				<option>2020</option>
  				<option>2021</option>
  				<option>2022</option>
  				<option>2023</option>
  				<option>2024</option>
  				<option>2025</option>
			</select>
				<span ng-show="korisnikForma.godinaKartice.$dirty && korisnikForma.godinaKartice.$error.required">Odaberite jednu opciju</span>
			
			
		</div>

		<div class="col-6 pt-5">
			<button class="btn btn-danger" type="submit">Registruj se</button>
			<button class="btn btn-danger" ng-disabled="korisnikForma.$invalid">Registrirajte se</button>	
		</div> 




	</div>

		
	
</form>


</div>


<?php include 'footer.php'; ?> 