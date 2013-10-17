<!DOCTYPE HTML>
<html>
	<head>
		<title>Lat3 Identifikasi Metode</title>
	</head>

	<body>
	
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Nama
		<input type="text" name="nama" /> <br />
		
		<input type="submit" value="OK" /> <br />
		</form>
		
		<?php
			if (isset($_REQUEST['nama'])){
				echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
			}
		?>
	</body>
</html>