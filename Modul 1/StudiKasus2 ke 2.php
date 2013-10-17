<html>
	<head>
		<title>Studi Kasus 2-2</title>
		<style type="text/CSS">
		table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
		td {margin: 0; padding: 8px; border: 1px solid #DEDEDE}
		</style>
	</head>
	<body>
		<?php
			echo '<table>';
			for($m = 0; $m < $_POST["brs"]; $m++){
				echo '<tr>';
				for($i = 0; $i < $_POST["klm"]; $i++){
					echo '<td><center>baris' . ($m + 1) . ' kolom' . ($i +1) . '</center></td>';
				}
				echo '</tr>';
			}
			echo '</table>';
		?>
		<br /><a href="StudiKasus2 ke 1.php">[BACK]</a>
	</body>
</html>
