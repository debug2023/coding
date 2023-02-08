<?php
//Lengkapkan kod selepas baris ini//
include('config.php'); 
$id = $_GET ['id'];
$result = mysqli_query($mysqli, "DELETE FROM data WHERE
	id='$id'");
//Lengkap kod Tamat	
	echo "<script>alert('Berjaya Padam maklumat $nama_pelajar');
	". "window.location='index.php'</script>";	
?> 