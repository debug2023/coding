<?php
include('config.php');
//LENGKAPKAN KOD SELEPAS BARIS INI
$result = mysqli_query($mysqli, "SELECT *FROM data");
?>
<head>
	<title>Senarai Pelajar</title>
	<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color:blanchedalmond; 
	 	text-align: center;}
	</style>
</head>
<body>
	<div id="header">
		<h1> ❀ KOLEJ VOKASIONAL SEPANG ❀ </h1>
<hr>
<table align="center">
	<center><h2>KELAB CATUR  KV SEPANG TAHUN 2022</h2><center>
<p align="center">Senarai Nama Pelajar</p>
		<td align="center" bgcolor="grey">Id Pelajar</td>
		<td align="center" bgcolor="grey">Nama Pelajar</td>
		<td align="center" bgcolor="grey">No Kad Pengenalan</td>
		<td align="center" bgcolor="grey">Tindakan</td>

<?php	
//Lengkapkan kod selepas baris ini//	

$no=1;

      while($res = mysqli_fetch_array($result)) 
      {
      	    echo "<tr>";
      	 
      	  	echo "<td>".$res['id']."</td>";
            echo "<td>".$res['nama_pelajar']."</td>";
            echo "<td>".$res['no_kp']."</td>";
           // echo "<td><a href= \"form_kemaskini.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')\">KEMASKINI</a></td>";
      	    echo "<td><a href= \"delete.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')\">HAPUS</a></td>";
      	    $no++;
      }
//LENGKAPKAN SEHINGGA BARIS INI//
?>
<hr>
<h3><center><a href="add.php"> ++ Tambah Rekod</a></center></h3>
</table>
</body>
</head>