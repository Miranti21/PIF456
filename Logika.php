<HTML>
	<HEAD>
		<TITLE>Operasi Logika</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$a=(-6);
			$b=7;
	
			print "a = $a <BR>";
			echo "b = $b <BR><BR><BR>";
			
			if ($a >=0 && $b>=0)
			{	echo "<h2> Keduanya Bilangan Asli";	}
			else if ($a <=0 && $b<=0)
			{	echo "<h2> Keduanya Bilangan Bukan Bilangan Asli";	}
			else if ($a >=0 && $b<=0)
			{	echo "<h2> a adalah bilangan asli dan b bukan";	}
			else if ($a <=0 && $b>=0)
			{	echo "<h2> b adalah bilangan asli dan a bukan";	}
		?>
	</BODY>
</HTML>