<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	$idstudent = $_POST['idstudent'];
	$student_name = $_POST['student_name'];
	$Jantina = $_POST['Jantina'];
	$No_Telefon = $_POST['No_Telefon'];
	$Alamat = $_POST['Alamat'];
	$Tahun_Graduat = $_POST['Tahun_Graduat'];
	$Status = $_POST['Status'];

	$result = mysqli_query($mysqli, "INSERT INTO Alumni(idstudent, student_name, Jantina ,No_Telefon ,Alamat ,Tahun_Graduat ,Status)"
		. "VALUES('$idstudent','$student_name','$Jantina','$No_Telefon','$Alamat','$Tahun_Graduat','$Status')");

	echo "<script>alert('Tambah maklumat berjaya');"
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
    <center> <br><br><h2 style="color:black;">TAMBAH REKOD ALUMNI</h2>
    	<fieldset>
    		<form action="add.php" method="post" name="form1">
    			<table width="25%" border="0">
				<tr>
    					<td style="color:black;">ID PELAJAR</td>
    					<td><input type="text" name="idstudent"></td>
    				</tr>
					<tr>
    					<td style="color:black;">NAMA PELAJAR</td>
    					<td><input type="text" name="student_name"></td>
    				</tr>
    				<tr>
    					<td style="color:black;">JANTINA</td>
    					<td><input type="text" name="Jantina"></td>
    				</tr>
					<tr>
    					<td style="color:black;">NO TELEFON</td>
    					<td><input type="text" name="No_Telefon"></td>
    				</tr>
					<tr>
    					<td style="color:black;">ALAMAT</td>
    					<td><input type="text" name="Alamat"></td>
    				</tr>
					<tr>
    					<td style="color:black;">TAHUN GRADUAT</td>
    					<td><input type="text" name="Tahun_Graduat"></td>
    				</tr>
					<tr>
    					<td style="color:black;">STATUS</td>
    					<td><input type="text" name="Status"></td>
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
