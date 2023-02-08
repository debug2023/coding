<html>
<body>
	<head>
		<title>Tambah Rekod</title>
		<style>
	 #header {width:100%; height:60px; border:1px solid #333; background-color: beige; }
	</style>
	</head>
	
<?php
include('config.php');
// Lengkapkan kod selepas baris ini//












//lengkapkan kod tamat di sini//
echo "<script>alert('Berjaya Daftar maklumat $nama_pelajar');"
	."window.location='senarai_pelajar.php'</script>";
}
else
{
?>
<html>
    <head>
      <title>TAMBAH REKOD</title>
    </head>
    <body bgcolor="lightcyan">
    <center> <br><br><h2 style="color:black;">TAMBAH REKOD PELAJAR</h2>
      <fieldset>
        <form action="add.php" method="post" name="form1">
          <table width="25%" border="0">
        <tr>
              <td style="color:black;">ID PELAJAR</td>
              <td><input type="text" name="id"></td>
            </tr>
          <tr>
              <td style="color:black;">NAMA PELAJAR</td>
              <td><input type="text" name="nama_pelajar"></td>
            </tr>
            <tr>
              <td style="color:black;">NO.KP</td>
              <td><input type="text" name="no_kp"></td>
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

