<HTML>
	<HEAD>
		<TITLE>Percabangan</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$orang = 'Tukul';
			
			print "<h1> $orang </h1> <BR><BR><BR>";
			
			switch ($orang)
			{
				case 'Tukul':
					echo "Nama Pelawak";
				break;
				case 'SBY';
					echo "Nama Presiden";
				break;
				case 'Sumanto';
					echo "Nama Kanibal";
				break;
				default:
					echo "Tidak Terdefinisi";
				break;
			}
		?>
	</BODY>
</HTML>