<?php include 'header.php'; ?> 



<div class="container-fluid mb-2 p-0">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11509.256321484761!2d18.385192299999996!3d43.8493184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1523989924817" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

<div class="container mb-2">

<form id="kontaktiranje2">
	<div class="row">
		<div class="col-12 text-center p-5">
		<img src="slike/meal.png" height="100px">
		<h3>Kontakt</h3>

		</div>
		<div class="col-6 pb-3">
				<input type="text" name="ime" placeholder="Ime" class="form-control" id="imeKorisnika2" required>
		</div>

		<div class="col-6 pb-3">
			<textarea type="text" name="pitanje" placeholder="Pitanje" class="form-control" id="porukaKorisnika2" required></textarea>
		</div>

		<div class="col-6">
			<input type="email" name="email" placeholder="E-mail" class="form-control" id="mailKorisnika2" required>	
		</div>

		<div class="col-6">
		<button type="submit" class="btn btn-danger" onclick="return kontaktForma();" id="dugme2">Pošalji upit</button>	
		</div>


	</div>
</form>

<br>
<br>
<br>
<div class="col-12" id="display2" width="500px" height="70px"></div>


</div>

<?php include 'footer.php'; ?> 