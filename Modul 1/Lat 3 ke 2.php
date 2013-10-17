<html>
	<head>
		<title>Latihan 3.2</title>
	</head>
	
	<body>
		<?php
			$str = '123abc';
			
			//casting nilai variabel $str ke integer
			$bil = (int)$str; //$bil=123
			
			echo gettype($str);
			//out: string

			echo gettype($bil);
			//out: integer
		?>
	</body>
</html>