 <?php include 'header.php'; ?> 

 <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 

$connect=mysqli_connect("localhost", "root", "root", "catering");
$data=json_decode(file_get_contents("php://input"));
 

$nick = $_POST['korisnikUsername']; 
$sifra = $_POST['korisnikPassword']; 
$ime = $_POST['korisnikIme']; 
$prezime = $_POST['korisnikPrezime']; 
$drzava = $_POST['korisnikDrzava']; 
$grad = $_POST['korisnikGrad']; 
$adresa = $_POST['korisnikAdresa']; 
$telefon = $_POST['korisnikTelefon']; 
$mail = $_POST['korisnikEmail']; 
$brojKartice = $_POST['brojKartice']; 
$tipKartice = $_POST['tipKartice']; 
$imeKartice = $_POST['imeKartice']; 
$datumKartice = $_POST['datumKartice']; 
$ulogaId = 3; 

 
 // Check connection 

 // if ($connect->connect_error) { 

 // die("Connection failed: " . $connect->connect_error); 

 // } 

 // echo "Connected successfully<br>"; 

 

 $query = "INSERT INTO user (username, password, ime, prezime, drzava, grad, adresa, telefon, email, broj_kartice, tip_kartice, ime_na_kartici, mjesec, uloga_id) VALUES ('$nick', '$sifra', '$ime', '$prezime', '$drzava', '$grad', '$adresa', '$telefon', '$mail', '$brojKartice', '$tipKartice', '$imeKartice', '$datumKartice', '$ulogaId')"; 
 	?>


<div id="porukaRegistracija">

<?php
 if(mysqli_query($connect,$query)){ 

 echo "Hvala Vam. Uspješno ste registrovani.";
} 

 else{ 

 echo "Došlo je do greške. Pokušajte ponovo.";
} 

 

 $connect->close(); 

 echo "<br><br><a href=\"registracija.php\">Nazad</a>"; 

 ?> 

</div>
<?php include 'footer.php'; ?> 
 
