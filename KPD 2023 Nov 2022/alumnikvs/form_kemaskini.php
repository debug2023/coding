<!DOCTYPE html>
<html>
<head>
	<title>Alumni KVSepang2022</title>
</head>
<body>

<?php
	include 'config.php';

	$id = $_GET['idstudent'];
	$sql = "SELECT * FROM alumni WHERE idstudent=$id";

	$result = mysqli_query($mysqli, $sql);

	while($res = mysqli_fetch_array($result)) {
		$idstudent = $res['idstudent'];
		$student_name = $res['student_name'];
		$Jantina = $res['Jantina'];
		$No_Telefon = $res['No_Telefon'];
		$Alamat = $res['Alamat'];
		$Tahun_Graduat = $res['Tahun_Graduat'];
		$Status = $res['Status'];
	}
?>

<form action="pros_kemaskini.php" name="update" method="POST">
	<center>
	<br>No ID Alumni</br>
		<br><input type="text" name="idstudent" value="<?php echo $idstudent;?>"></br>
	<br>Nama Alumni</br>
		<br><input type="text" name="student_name" value="<?php echo $student_name;?>"></br>
	<br>Jantina</br>
		<br>	<input type="text" name="Jantina" value="<?php echo $Jantina;?>"></br>
	<br>No Telefon</br>
			<br><input type="text" name="No_Telefon" value="<?php echo $No_Telefon;?>"></br>
	<br>Alamat</br>
			<br><input type="text" name="Alamat" value="<?php echo $Alamat;?>"></br>
	<br>Tahun_Graduat</br>
			<br><input type="text" name="Tahun_Graduat" value="<?php echo $Tahun_Graduat;?>"></br>
	<br>Status</br>
			<br><input type="text" name="Status" value="<?php echo $Status;?>"></br>

				<br><input type="submit" name="update" value="Kemaskini">
	</center>

</form>
</body>
</html>

