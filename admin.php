<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['user'] != 'admin') {
		die("anda bukan admin") ;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<h1 align="center">halaman <?= $_SESSION['user']; ?></h1>
	<p align="center">halo <?= $_SESSION['nama']; ?> anda telah login sebagai <?= $_SESSION['user']; ?></p>
	<a href="management.php">management</a><br>
	<a href="logout.php" onclick="return confirm('yakin ingin keluar')" >logout</a>
</body>
</html>
<?php 
}else{
	echo "<script>
	alert('anda belum login');
		document.location='index.php';
	</script>";
}

 ?>