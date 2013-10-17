<html>
	<head>
		<title>Tugas 1-1</title>
	</head>
	
	<body>
		<p>Pass By Value<br></p>
		<?php
			function jumlah($nilai) {
				$nilai++;
			}
			
			$input=20;
			jumlah($input);
			echo $input;
		?>
	</body>
</html>