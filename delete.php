<?php include 'conection.php'; ?> 

<?php

$id = (int)$_GET['id'];

$update = $conn->prepare("DELETE FROM user WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
$update->close();

echo "Record deleted successfully";

echo "<br><br><a href=\"admin.php\">Back</a>";

?> 


