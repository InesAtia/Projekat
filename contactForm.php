<?php include 'header.php'; ?> 

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connect=mysqli_connect("localhost", "root", "root", "catering");
$data=json_decode(file_get_contents("php://input"));

$ime=$_POST['ime'];
$email=$_POST['email'];
$pitanje=$_POST['pitanje'];

$query="INSERT INTO kontakt_poruka(ime, email_korisnika, poruka) VALUES('$ime', '$email', '$pitanje')";
?>

<div id="porukaKontakt">
<?php

if(mysqli_query($connect,$query)){ 

 echo $ime.", hvala Vam na Vašoj poruci. Odgovorit ćemo u najkraćem mogućem roku.";
} 

 else{ 

 echo "Došlo je do greške. Pokušajte ponovo.";
} 

 

 $connect->close(); 

 echo "<br><br><a href=\"index.php\">Nazad</a>"; 


//kontakt poruka na mail, radi samo na hosting-u, ne moze na localhost-u
// $post_data = file_get_contents("php://input");
// $data = json_decode($post_data);
 
// //Just to display the form values
// echo "Name : " . $data=$_POST['name'];
// echo "Email : " . $data=$_POST['email'];
// echo "Message : " . $data=$_POST['message'];
 
// // send an email
// $to = 'yourcateringpals@gmail.com';
// $from= $data=$_POST['email'];
  
// $message = $data=$_POST['message'];
 

 
// //php mail function to send email on your email address
// mail($to, $from, $message);


?>
</div>
<?php include 'footer.php'; ?> 