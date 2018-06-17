
<?php
$id= $_POST['id'];
$nick = $_POST['korisnikUsername'];
$sifra = $_POST['korisnikPassword'];						
$ime = $_POST['korisnikIme'];		
$prezime = $_POST['korisnikPrezime'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$update = "UPDATE user SET username='$nick', password='$sifra', ime='$ime', prezime='$prezime' WHERE id = $id";

if(mysqli_query($conn,$update)){
echo "Record updated successfully";}
else{
echo "Record update failed!";}

$conn->close();
echo "<br><br><a href=\"admin.php\">Back</a>";

?> 


