<!DOCTYPE HTML>
<html>
	<head>
		<title>Lat5 Data Checkbox</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
			<input type="checkbox" name="hobby[]" value="Membaca"
			/>Membaca
			
			<input type="checkbox" name="hobby[]" value="Olahraga"
			/>Olahraga
			
			<input type="checkbox" name="hobby[]" value="Menyanyi"
			/>Menyanyi
			
			<input type="submit" value="ok" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['hobby'])){
			foreach ($_POST['hobby'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>

	</body>
</html>