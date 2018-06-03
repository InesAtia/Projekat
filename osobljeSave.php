
<?php
$id= $_POST['id'];
$naziv = $_POST['naziv'];
$opis = $_POST['opis'];						
$cijena = $_POST['cijena'];		
$tip = $_POST['tip'];
$slika = $_POST['slika'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$update = "UPDATE proizvod SET naziv='$naziv', opis='$opis', cijena_po_jedinici='$cijena', tip='$tip', slika='$slika' WHERE id = $id";

if(mysqli_query($conn,$update)){
echo "Proizvod updated successfully";}
else{
echo "Proizvod update failed!";}

$conn->close();
echo "<br><br><a href=\"osoblje.php\">Back</a>";

?> 


