<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<!DOCTYPE html>
    <html>
    <head>
    <title>Tugas Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    </head>
    <body>
          <nav class="navbar navbar-default" role="navigation">

 <div class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/bootstrap/index2.php">Home</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/Modul4/studikasus">Modul 4=Studi Kasus</a></li>
      <li class="active"><a href="http://localhost/bootstrap/Modul4/tugas/login.php">Modul 4=Tugas Praktikum</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/Modul5/studikasus.php">Modul 5=Studi Kasus</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/Modul5/tugas.php">Modul 5=Tugas Praktikum</a></li>
    </ul>
    
  </div><!-- /.navbar-collapse -->
	<body>
		<table border="1" width="500px">
			<?php
			require "koneksi.php";
			$query1 = "SELECT * FROM Mahasiswa ORDER BY nim ";
			$urut = 'asc';
			$urutbaru = 'asc';
			if(isset($_GET['orderby'])){
				$orderby=$_GET['orderby'];
				$urut=$_GET['urut'];
							
				$query1="SELECT * FROM Mahasiswa order by $orderby $urut ";
				if($urut=='asc'){
					$urutbaru='desc';                                        
				}else{
					$urutbaru='asc';
				}
			}
			?>
			<th>
				<td><a href='tugas.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
				<td><a href='tugas.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
				<td><a href='tugas.php?orderby=alamat&urut=<?=$urutbaru;?>'>Alamat</a></td>
			</th>
															
			<?php
			$result = mysql_query($query1) or die (mysql_error());
			$no = 1;
			while($rows=mysql_fetch_object($result)){
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $rows -> nim;?></td>
					<td><?php echo $rows -> nama;?></td>
					<td><?php echo $rows -> alamat;?></td>
				</tr>
					
				<?php
				$no++;
			}
			?>
		</table>
	</body>
</html>