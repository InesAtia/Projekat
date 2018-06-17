
<?php
$id= $_POST['id'];
$title = $_POST['title'];					

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$update = "UPDATE podesavanja SET title='$title' WHERE id = $id";

if(mysqli_query($conn,$update)){
echo "Title updated successfully";}
else{
echo "Title update failed!";}

$conn->close();
echo "<br><br><a href=\"admin.php\">Back</a>";

?> 
