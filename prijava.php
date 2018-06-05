<?php include 'header.php'; ?> 

<div class="container mb-2">

<form action="actionLogin.php" method="POST" name="formaPrijava">
	<div class="row">
		<div class="col-12 text-center p-5">
			<img src="slike/meal.png" height="100px">
		<h3>Prijava</h3>

		</div>

	</div>

	<div class="row">
			<div class="col-4 pb-3"></div>

			<div class="col-4 pb-3">
				<input type="email" name="email" placeholder="E-mail" ng-model="prijavaEmail" class="form-control" ng-required="true"><br>
				<span ng-show="formaPrijava.email.$dirty && formaPrijava.email.$error.required">Unesite Vaš email</span>
				<input type="password" name="password" placeholder="Lozinka" ng-model="prijavaPassword" class="form-control" ng-required="true"><br>
				<span ng-show="formaPrijava.password.$dirty && formaPrijava.password.$error.required">Unesite lozinku</span>
				<button type="submit" class="btn btn-danger" ng-disabled="formaPrijava.$invalid" style="width:350px">Prijavi se</button>
			
			</div>

			<div class="col-4"></div>

	</div>


	
</form>


</div>



<?php include 'footer.php'; ?> 