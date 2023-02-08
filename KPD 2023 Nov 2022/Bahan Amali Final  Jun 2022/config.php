<!--Membuat sambungan ke db-->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "catur";

$con = mysqli_connect($host,$user,$pass,$dbname) or die('gagal disambung ke db');
?>