<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<title>Form Administrator</title>
</head>
<body>
<?php
if(($_POST['user']=='miranti') AND ($_POST['pass']=='racunn')) {
echo 'Kamu sukses,:'.$_POST['user'];
echo '<br><br>Selamat ya ' . $_POST['user'];
}
else {
echo "<br><br><br><body text='red'><strong><center>Loginmu salah<br><br><a href='form.php'><h4>Kembali Ke Login</h4></a></center></strong></body>";
}
?>
</body>

</html>
