<?php include 'header.php'; ?>

<div class="container mb-2">


<form name="korisnikForma" action="actionReg.php" method="POST">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Registracija</h3>

		<p>Polja sa * su obavezna</p>

		</div>
			
		<div class="col-6 pb-3">
			<label>Ime:*</label>
				<input type="text" name="korisnikIme" class="form-control" required>

				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>Prezime:*</label>
				<input type="text" name="korisnikPrezime" class="form-control" required>
				
		</div>

		<div class="col-6 pb-3">
			<label>Username:*</label>
				<input type="text" name="korisnikUsername" class="form-control" required>
				
				
		</div>
		

		
		<div class="col-6 pb-3">
			<label>E-mail adresa:*</label>
				<input type="email" name="korisnikEmail" class="form-control" required>	
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label> Lozinka (minimalno 8 karaktera):*</label>
				<input type="password" name="korisnikPassword" class="form-control" required minlength="8">
				
		</div>

		
		<div class="col-6 pb-3">
			<label>Adresa:*</label>
				<input type="text" name="korisnikAdresa" class="form-control" required>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Grad:*</label>
				<input type="text" name="korisnikGrad" class="form-control" required>
				
			
		</div>

		
		<div class="col-6 pb-3">
			<label>Država:*</label>	
				<input type="text" name="korisnikDrzava" class="form-control" required>
				
		</div>

		
		<div class="col-6 pb-5">
			<label>Telefon:*</label>
			<input type="text" name="korisnikTelefon" class="form-control" required>
			
				
		</div>

		<!--Informacije o placanju-->
		<div class="col-6 pb-3">
			<label>Broj kartice (ukucajte samo brojeve, bez znakova):*</label>	
			<input type="number" name="brojKartice" class="form-control" required min="16">
			
		</div>

		<div class="col-6 pb-3">
			<label>Tip kartice (odaberite):*</label>
			<select class="form-control form-control-sm" name="tipKartice" required>
  				<option>Visa</option>
  				<option>MasterCard</option>
  				<option>Maestro</option>
  				<option>AmericanExpress</option>
			</select>
			
			
		</div>

		<div class="col-6 pb-3">
			<label>Ime na kartici:*</label>
			<input type="text" name="imeKartice" class="form-control" required>
			
			
		</div>

		

		<div class="col-3 pb-3">
			<label> Datum isteka kartice:*</label>
			<select class="form-control form-control-sm" name="datumKartice" required>
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
			
			
		</div>

		<div class="col-3 pb-3">
			<label> Godina isteka kartice:*</label>
			<select class="form-control form-control-sm" name="godinaKartice" required>
  				<option>2018</option>
  				<option>2019</option>
  				<option>2020</option>
  				<option>2021</option>
  				<option>2022</option>
  				<option>2023</option>
  				<option>2024</option>
  				<option>2025</option>
			</select>
			
			
		</div>

		<div class="col-6 pt-5">
			<button class="btn btn-danger" type="submit">Registruj se</button>
			<button class="btn btn-danger" onclick="return validacijaForme();">Registrirajte se</button>	
		</div> 




	</div>

		
	
</form>


</div>


<?php include 'footer.php'; ?> 