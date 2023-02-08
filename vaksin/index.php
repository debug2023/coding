<?php
include('config.php');
//LENGKAPKAN KOD SELEPAS BARIS INI
$result = mysqli_query($mysqli, "SELECT *FROM corona");
?>
<head>
	<title>Rekod Vaksinasi Pelajar</title>
	<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color:blanchedalmond;  text-align: center;}
	</style>
</head>
<body>
	
<hr>
<table align="center">
	<center><h2>REKOD VAKSINASI PELAJAR KV SEPANG TAHUN 2022</h2><center>
<p align="center">Senarai Rekod Vaksinasi Pelajar</p>
		<td align="center" bgcolor="lightblue">No Kad Pengenalan</td>
		<td align="center" bgcolor="lightblue">Nama Pelajar</td>
		<td align="center" bgcolor="lightblue">Kelas</td>
		<td align="center" bgcolor="lightblue">Jenis Vaksin</td>
		<td align="center" bgcolor="lightblue">Tarikh_Vaksin</td>
		<td align="center" bgcolor="lightblue">Tindakan</td>

<?php	
//Lengkapkan kod selepas baris ini//	

$no=1;

      while($res = mysqli_fetch_array($result)) 
      {
      	echo "<tr>";
      	echo "<td>".$res['nokp']."</td>";
            echo "<td>".$res['nama_pelajar']."</td>";
            echo "<td>".$res['kelas']."</td>";
            echo "<td>".$res['jenis_vaksin']."</td>";
            echo "<td>".$res['tarikh_vaksin']."</td>";
           // echo "<td><a href= \"form_kemaskini.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')\">KEMASKINI</a></td>";
      	echo "<td><a href= \"delete.php?nokp=$res[nokp]\" onClick=\return confirm('Adakah anda pasti?')\">HAPUS</a></td>";
      	$no++;
      }
//LENGKAPKAN SEHINGGA BARIS INI//
?>
<hr>
<h3><center><a href="add.php"> ++ Tambah Rekod</a></center></h3>
</table>
</body>
</head>