<?php
include 'config.php';

if (isset($_POST['update'])) 
{
    $idstudent = $_POST['idstudent'];
    $student_name = $_POST['student_name'];
    $Jantina = $_POST['Jantina'];
    $No_Telefon = $_POST['No_Telefon'];
    $Alamat = $_POST['Alamat'];
    $Tahun_Graduat = $_POST['Tahun_Graduat'];
    $Status = $_POST['Status'];

    $query = "UPDATE alumni SET idstudent='$idstudent', student_name='$student_name', Jantina='$Jantina', 
    No_Telefon='$No_Telefon', Alamat='$Alamat', Tahun_Graduat='$Tahun_Graduat',Status='$Status' WHERE idstudent=$idstudent";

    $result = mysqli_query($mysqli, $query);

    if (mysqli_query($mysqli, $query)) {
        echo "<script>alert('Kemaskini maklumat berjaya! Yey!')</script>" . 
    "<script>window.location='index.php'</script>";
        }
    else {
        echo "<script>alert('Maklumat tidak berjaya dipadam. :( :sob: :sob:')</script>";
        }
}

?>