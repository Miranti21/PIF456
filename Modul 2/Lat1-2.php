<!DOCTYPE HTML>
<html>
	<head>
		<title>Lat1 Metode POST</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Nama
		<input type="text" name="nama" /> <br />
		
		<input type="submit" value="OK" /> <br />
		</form>
		
		<?php
			if (isset($_POST['nama'])){
				echo 'Hallo, ' . $_POST['nama'];
			}
		?>
	</body>
</html>