<!DOCTYPE html>
<html>
	<head> 
		<title>Tugas Bootstrap</title> 
		<style type="text/css">
			.even {
				background: #ddd;
			}
		</style>
	</head>

	<body> 
		<?php
		ini_set('display_errors',1);

		require_once './koneksi.php';
		require_once './data_hadler.php';

		define('MHS','mahasiswa');

		data_handler('?m=data');
		?>
	</body>
</html>