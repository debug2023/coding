<html>
<body>
	<head>
		<title>Tambah Rekod</title>
		<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color: beige; }
	</style>
	</head>
	
<?php
include_once("config.php");
// Lengkapkan kod selepas baris ini//

if(isset($_POST['Submit']))

{
  $nokp =$_POST['nokp'];
  $nama_pelajar = $_POST['nama_pelajar'];
  $kelas = $_POST['kelas'];
  $jenis_vaksin = $_POST['jenis_vaksin'];
  $tarikh_vaksin = $_POST['tarikh_vaksin'];

  $result = mysqli_query($mysqli, "INSERT INTO corona (nokp, nama_pelajar, kelas, jenis_vaksin, tarikh_vaksin)"."VALUES('$nokp','$nama_pelajar','$kelas', '$jenis_vaksin', '$tarikh_vaksin')");
//lengkapkan kod tamat di sini//
echo "<script>alert('Berjaya Daftar maklumat pelajar');"
	. "window.location='index.php'</script>";
}
else
{
?>
<html>
    <head>
      <title>TAMBAH REKOD</title>
    </head>
    <body bgcolor="lightcyan">
    <center> <br><br><h2 style="color:black;">TAMBAH REKOD VAKSINASI PELAJAR</h2>
      <fieldset>
        <form action="add.php" method="post" name="form1">
          <table width="25%" border="0">
        <tr>
              <td style="color:black;">NO KAD PENGENALAN</td>
              <td><input type="text" name="nokp"></td>
            </tr>
          <tr>
              <td style="color:black;">NAMA PELAJAR</td>
              <td><input type="text" name="nama_pelajar"></td>
            </tr>
            <tr>
              <td style="color:black;">KELAS</td>
              <td><input type="text" name="kelas"></td>
            </tr>
          <tr>
            <td style="color:black;">JENIS VAKSIN</td>
              <td><input type="text" name="jenis_vaksin"></td>
            </tr>
          <tr>

            <td style="color:black;">TARIKH VAKSIN</td>
              <td><input type="date" name="tarikh_vaksin"></td>
            </tr>
          <tr>
              <td></td>
              <td><input type="submit" name="Submit" value="Tambah Rekod"></td>
            </tr>
          </table>
        </form>

        <br><a href="index.php">Kembali ke Laman Utama</a>
      </fieldset>
        </center>
<?php 
}
?>
    </body>
</html>
