
<?php
$id= $_POST['id'];
$naslov = $_POST['naslov'];
$opis = $_POST['opis'];						

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$update = "UPDATE post SET naslov='$naslov', opis='$opis' WHERE id = $id";

if(mysqli_query($conn,$update)){
echo "Post updated successfully";}
else{
echo "Post update failed!";}

$conn->close();
echo "<br><br><a href=\"osoblje.php\">Back</a>";

?> 


