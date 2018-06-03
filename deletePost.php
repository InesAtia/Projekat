
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = (int)$_GET['id'];

$update = $conn->prepare("DELETE FROM post WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
$update->close();

echo "Post deleted successfully";

echo "<br><br><a href=\"osoblje.php\">Back</a>";

?> 


