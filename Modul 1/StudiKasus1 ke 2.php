<html>
	<head>
		<title>Studi Kasus 1-2</title>
	</head>
<body>
	<?php
	function greeting($j){
		if($j < 12 AND $j > 0){
			echo 'Hay Hay,, Pagi!! ';
		}elseif($j < 18 AND $j > 12){
			echo 'Waaah,, Siang!! ';
		}elseif($j < 24 AND $j > 18){
			echo 'Hoamh,, Malam!! ';
		}else{
			echo '';		}
	}
	greeting($_POST["jam"]);
	echo 'Sekarang Jam ' . $_POST["jam"] . ':00 WIB, ';
	?>
	<br /><a href="StudiKasus1 ke 1.php">[BACK]</a>
</body>
</html>
