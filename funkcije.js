
//osoblje panel navigacija

function osobljeProizvodi(){
	document.getElementById('osobljePrvi').style.display='block';
	document.getElementById('osobljeDrugi').style.display='none';
	document.getElementById('osobljeTreci').style.display='none';
	document.getElementById('osobljeCetvrti').style.display='none';
}

function osobljePostovi(){
	document.getElementById('osobljePrvi').style.display='none';
	document.getElementById('osobljeDrugi').style.display='block';
	document.getElementById('osobljeTreci').style.display='none';
	document.getElementById('osobljeCetvrti').style.display='none';
}

function osobljeNarudzba(){
	document.getElementById('osobljePrvi').style.display='none';
	document.getElementById('osobljeDrugi').style.display='none';
	document.getElementById('osobljeTreci').style.display='block';
	document.getElementById('osobljeCetvrti').style.display='none';
}

function osobljePoruke(){
	document.getElementById('osobljePrvi').style.display='none';
	document.getElementById('osobljeDrugi').style.display='none';
	document.getElementById('osobljeTreci').style.display='none';
	document.getElementById('osobljeCetvrti').style.display='block';
}


//admin panel navigacija

function adminKorisnici(){
	document.getElementById('adminPrvi').style.display='block';
	document.getElementById('adminDrugi').style.display='none';
}

function adminPodesavanja(){
	document.getElementById('adminPrvi').style.display='none';
	document.getElementById('adminDrugi').style.display='block';
}







//Validacija registracijske forme:

// function validacijaForme(){

// 	if (document.korisnikForma.korisnikIme.value=="" || document.korisnikForma.korisnikIme.value.length<3){
// 		//ime
// 		alert("Unesite ime");
// 		document.korisnikForma.korisnikIme.focus();
// 		return false;
// 	}
// 		//prezime
// 	if (document.korisnikForma.korisnikPrezime.value=="" || document.korisnikForma.korisnikPrezime.value.length<3){

// 		alert("Unesite prezime");
// 		document.korisnikForma.korisnikPrezime.focus();
// 		return false;
// 	}
// 		//username
// 	if (document.korisnikForma.korisnikUsername.value==""){

// 		alert("Unesite username");
// 		document.korisnikForma.korisnikUsername.focus();
// 		return false;
// 	}
// 		//email
// 	if (document.korisnikForma.korisnikEmail.value==""){

// 		alert("Unesite email adresu");
// 		document.korisnikForma.korisnikEmail.focus();
// 		return false;
// 	}
// 		//password
// 	if (document.korisnikForma.korisnikPassword.value=="" || document.korisnikForma.korisnikPassword.value.length <8){

// 		alert("Unesite lozinku od najmanje 8 karaktera");
// 		document.korisnikForma.korisnikPassword.focus();
// 		return false;
// 	}
// 		//adresa
// 	if (document.korisnikForma.korisnikAdresa.value=="" || document.korisnikForma.korisnikAdresa.value.length<4){

// 		alert("Unesite adresu");
// 		document.korisnikForma.korisnikAdresa.focus();
// 		return false;
// 	}
// 		//grad
// 	if (document.korisnikForma.korisnikGrad.value=="" || document.korisnikForma.korisnikGrad.value.length<3){

// 		alert("Unesite grad");
// 		document.korisnikForma.korisnikGrad.focus();
// 		return false;
// 	}
// 		//drzava
// 	if (document.korisnikForma.korisnikDrzava.value=="" || document.korisnikForma.korisnikDrzava.value.length<3){

// 		alert("Unesite drzavu");
// 		document.korisnikForma.korisnikDrzava.focus();
// 		return false;
// 	}
// 		//telefon
// 	if (document.korisnikForma.korisnikTelefon.value=="" || document.korisnikForma.korisnikTelefon.value.length<6){

// 		alert("Unesite broj telefona");
// 		document.korisnikForma.korisnikTelefon.focus();
// 		return false;
// 	}
// 		//broj kartice
// 	if (document.korisnikForma.brojKartice.value=="" || document.korisnikForma.brojKartice.value.length<16 || isNaN(document.korisnikForma.brojKartice.value)){

// 		alert("Unesite broj kartice");
// 		document.korisnikForma.brojKartice.focus();
// 		return false;
// 	}
// 		//kartica ime
// 	if (document.korisnikForma.imeKartice.value=="" || document.korisnikForma.imeKartice.value.length<4){

// 		alert("Unesite ime na kartici");
// 		document.korisnikForma.imeKartice.focus();
// 		return false;
// 	}

// 	return (true);


// }


