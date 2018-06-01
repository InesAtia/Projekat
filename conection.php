<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catering";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Greška u konekciji: " . mysqli_connect_error());
}
//echo "Konekcija uspješno uspostavljena";

mysqli_set_charset($conn,"utf8");
?>