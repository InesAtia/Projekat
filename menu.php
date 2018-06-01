<?php include 'header.php'; ?>
<?php include 'conection.php'; ?>
<div class="container-fluid galerija-home" style="background: transparent; padding-bottom: 0">



	<?php
$sql = "SELECT * FROM proizvod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<a href="menu.php?id='.$row["id"].'"><img src="slike/ponuda/'.$row["foto"].'"></a>';

    }
} else {
    echo "0 results";
}

?>


</div>
<?php
// povlaci id iz url-a
$proizvod_id = $_GET['id'];  
?>


<?php
$sql = "SELECT * FROM proizvod where id=$proizvod_id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       
       $naziv = $row["naziv"];
       $opis =  $row["opis"];
       $cijena = $row["cijena_po_jedinici"];
       $foto = "slike/".$row["foto"];
        
    }
} else {
    echo "0 results";
}

?>
   
<div class="container page">


   <h3><?php echo $naziv; ?></h3> 
<hr>

<div class="row">
	<div class="col-4">

<?php echo $opis; ?><br><br>
		<h3> Cijena: <?php  echo $cijena; ?> KM</h3>

	</div>

	<div class="col-8"><img src="<?php echo $foto; ?>" class="glavna" width="100%">

	</div>
	</div>






</div>


<?php include 'footer.php'; ?> 