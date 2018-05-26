//kontakt forma na pocetnoj stranici:

function kontaktFormaPocetna(){
			var ime = document.getElementById('imeKorisnika').value;
			var emailAddress = document.getElementById('mailKorisnika').value;
			var poruka = document.getElementById('porukaKorisnika').value;

			document.getElementById('display').innerHTML = ime + "," + " hvala Vam na Vasoj poruci. Odgovorit cemo u najkracem mogucem roku.";
    		
    		return false;
}

//kontakt forma na kontakt stranici:

function kontaktForma(){
			var ime = document.getElementById('imeKorisnika2').value;
			var emailAddress = document.getElementById('mailKorisnika2').value;
			var poruka = document.getElementById('porukaKorisnika2').value;

			document.getElementById('display2').innerHTML = ime + "," + " hvala Vam na Vasoj poruci. Odgovorit cemo u najkracem mogucem roku.";
    		
    		return false;
}

//Validacija registracijske forme:

function validacijaForme(){

	if (document.korisnikForma.korisnikIme.value=="" || document.korisnikForma.korisnikIme.value.length<3){
		//ime
		alert("Unesite ime");
		document.korisnikForma.korisnikIme.focus();
		return false;
	}
		//prezime
	if (document.korisnikForma.korisnikPrezime.value=="" || document.korisnikForma.korisnikPrezime.value.length<3){

		alert("Unesite prezime");
		document.korisnikForma.korisnikPrezime.focus();
		return false;
	}
		//username
	if (document.korisnikForma.korisnikUsername.value==""){

		alert("Unesite username");
		document.korisnikForma.korisnikUsername.focus();
		return false;
	}
		//email
	if (document.korisnikForma.korisnikEmail.value==""){

		alert("Unesite email adresu");
		document.korisnikForma.korisnikEmail.focus();
		return false;
	}
		//password
	if (document.korisnikForma.korisnikPassword.value=="" || document.korisnikForma.korisnikPassword.value.length <8){

		alert("Unesite lozinku od najmanje 8 karaktera");
		document.korisnikForma.korisnikPassword.focus();
		return false;
	}
		//adresa
	if (document.korisnikForma.korisnikAdresa.value=="" || document.korisnikForma.korisnikAdresa.value.length<4){

		alert("Unesite adresu");
		document.korisnikForma.korisnikAdresa.focus();
		return false;
	}
		//grad
	if (document.korisnikForma.korisnikGrad.value=="" || document.korisnikForma.korisnikGrad.value.length<3){

		alert("Unesite grad");
		document.korisnikForma.korisnikGrad.focus();
		return false;
	}
		//drzava
	if (document.korisnikForma.korisnikDrzava.value=="" || document.korisnikForma.korisnikDrzava.value.length<3){

		alert("Unesite drzavu");
		document.korisnikForma.korisnikDrzava.focus();
		return false;
	}
		//telefon
	if (document.korisnikForma.korisnikTelefon.value=="" || document.korisnikForma.korisnikTelefon.value.length<6){

		alert("Unesite broj telefona");
		document.korisnikForma.korisnikTelefon.focus();
		return false;
	}
		//broj kartice
	if (document.korisnikForma.brojKartice.value=="" || document.korisnikForma.brojKartice.value.length<16 || isNaN(document.korisnikForma.brojKartice.value)){

		alert("Unesite broj kartice");
		document.korisnikForma.brojKartice.focus();
		return false;
	}
		//kartica ime
	if (document.korisnikForma.imeKartice.value=="" || document.korisnikForma.imeKartice.value.length<4){

		alert("Unesite ime na kartici");
		document.korisnikForma.imeKartice.focus();
		return false;
	}

	return (true);


}



