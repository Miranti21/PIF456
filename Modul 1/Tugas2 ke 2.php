<html>
	<head>
		<title>Tugas 2-2</title>
		<style type="text/CSS">
			table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
			td {margin: 0; padding: 8px; border: 1px solid #DEDEDE}
		</style>
	</head>
	
	<body>
		<?php
			$hitung = 1;
			$sel = $_POST["sel"];
			$klm = $_POST["klm"];
			$brs = ceil($sel / $klm);
			echo '<table>';
					for($m = 0; $m < $brs; $m++){
				echo '<tr>';
				for($i = 0; $i < $_POST["klm"]; $i++){
					if($hitung != NULL){
						echo '<td><center>' . $hitung . '</center></td>';
						if ($hitung < $sel AND $hitung != NULL){
							$hitung = $hitung +1;
						}else{
							$hitung = NULL;
						}
					}
				}
				echo '</tr>';
			}
			echo '</table>';
		?>
		<br /><a href="Tugas2 ke 1.php">[BACK]</a>
	</body>
</html>
