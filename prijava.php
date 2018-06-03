<?php include 'header.php'; ?> 

<div class="container mb-2">

<form action="actionLogin.php" method="POST">
	<div class="row">
		<div class="col-12 text-center p-5">
			<img src="slike/meal.png" height="100px">
		<h3>Prijava</h3>

		</div>

	</div>

	<div class="row">
			<div class="col-4 pb-3"></div>

			<div class="col-4 pb-3">
				<input type="email" name="email" placeholder="E-mail" class="form-control" required><br>
				<input type="password" name="password" placeholder="Lozinka" class="form-control" required><br>
				<button type="submit" class="btn btn-danger" style="width:350px">Prijavi se</button>
			
			</div>

			<div class="col-4"></div>

	</div>


	
</form>


</div>



<?php include 'footer.php'; ?> 