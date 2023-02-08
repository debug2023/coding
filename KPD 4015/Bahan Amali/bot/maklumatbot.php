
<!DOCTYPE html>
<html>
<head>
	<title>Amali Semester 4 2019</title>
</head>
<style type="text/css">
	body {
		background-color: #ddd;
	}
	table {
		width: 75%;
		margin: 0 auto;
	}
	th {
		background-color: yellow;
	}
	a {
		display: inline-block;
		background-color: cyan;
		padding: 14px 16px;
		text-decoration: none;
	}
	a:hover {
		background-color: orange;
		color: white;
	}
</style>
<body>
  <br><br>
  <div style="width: 75%; margin: 0 auto; text-align: center; "><img src="boat.jpg" style="border-radius: 20px;"></div> 
  <div style=" background-color: cyan; color: white; width: 75%; margin: 0 auto;">
  	<a href="# ">HOME</a>
  	<a href="#">BOAT</a>
  	<a href="#">CONTACT US</a>
  	<a href="logout.php" style="float: right;">Logout</a>
  </div>
  <h2 style="text-align: center;">Senarai Bot</h2>
	<table border="1" cellpadding="5" cellspacing="0" bgcolor="white">
		<tr>
			<th>Id Bot</th>
			<th>Nama Bot</th>
			<th>Kapasiti Penumpang</th>
			<th>Kelajuan Maksimum</th>
		</tr>
		<?php
		include 'config.php';
			$result = mysqli_query($connect,"SELECT * FROM  ") // menambah nama jadual "infobot" di SELECT * FROM
					or die(mysqli_error());
			

			while ($res=mysqli_fetch_array($result)) {
				echo "
					<tr>
						<td>".$res['idbot']."</td>
						<td>". $res['namabot'] ."</td>
						<td>". $res[''] ."</td>
						<td>". $res[''] ."</td>
					</tr>
						";
			}
		?>
	</table>
</body>
</html>