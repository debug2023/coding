<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM Alumni");
?>
<html>
    <head>
          <title>ALUMNI</title>

    </head>
    <body bgcolor="66CDAA">
    <center><BR><BR>
        <h2 style="color:BLACK;">❀ ALUMNI KV SEPANG ❀</h2>
        <fieldset>
            <table  bgcolor='white' width='80%'border=0>
                <tr bgcolor='pink'>
                    <td align="center">NO ID</td>
                    <td align="center">NAMA PELAJAR</td>
                    <td align="center">JANTINA</td>
                    <td align="center">NO TELEFON</td>
                    <td align="center">ALAMAT</td>
                    <td align="center">TAHUN_GRADUAT</td>
                    <td align="center">STATUS</td>
                    <td align="center">TINDAKAN</td>
                    <td align="center">TINDAKAN</td>
                </tr>

<?php
      $no=1;

      while($res = mysqli_fetch_array($result)) {
      	  echo "<tr>";
      	 
      	  echo "<td>".$res['idstudent']."</td>";
            echo "<td>".$res['student_name']."</td>";
            echo "<td>".$res['Jantina']."</td>";
            echo "<td>".$res['No_Telefon']."</td>";
            echo "<td>".$res['Alamat']."</td>";
            echo "<td>".$res['Tahun_Graduat']."</td>";
            echo "<td>".$res['Status']."</td>";
            echo "<td><a href= \"form_kemaskini.php?idstudent=$res[idstudent]\" onClick=\return confirm('Adakah anda pasti?')\">KEMASKINI</a></td>";
      	  echo "<td><a href= \"delete.php?idstudent=$res[idstudent]\" onClick=\return confirm('Adakah anda pasti?')\">HAPUS</a></td>";
      	  $no++;
      }
         ?>
           </table>
           <br><a href="add.php" style="color:darkred;">DAFTAR ALUMNI BARU</a>
    </center>
  </fieldset>
    </body>
</html>