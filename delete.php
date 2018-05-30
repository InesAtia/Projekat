
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "web_catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (int)$_GET['id'];

$update = $conn->prepare("DELETE FROM user WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
$update->close();

echo "Record deleted successfully";
echo "<br><br><a href=\"panel.php\">Back</a>";

?> 


