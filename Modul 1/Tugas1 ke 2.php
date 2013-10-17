<html>
	<head>
		<title>Tugas 1-2</title>
	</head>
	
	<body>
		<p>Pass By Reference</p>
		
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