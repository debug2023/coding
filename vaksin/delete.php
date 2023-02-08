<?php
Include("config.php");
$nokp = $_GET['nokp'];


$result = mysqli_query($mysqli, "DELETE FROM corona WHERE nokp='$nokp'");
echo "<script>alert('Hapus maklumat berjaya');
". "window.location='index.php'</script>";

?>