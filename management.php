<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['user'] != 'admin') {
		die("anda bukan admin") ;
	}
	include 'koneksi.php';
	$sql = mysqli_query($conn,"SELECT * FROM user");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<table align="center" cellpadding="10" cellspacing="0" border="1">
	<thead>
	<h2 align="center">TOTAL : <?= mysqli_num_rows($sql); ?></h2>
	<a href="tambah_user.php">tambah user</a>
			<tr>
				<th>nama</th>
				<th>username</th>
				<th>level</th>
				<th>action</th>
			</tr>
		</thead>
		<?php while ($data = mysqli_fetch_assoc($sql)):?>
			<tbody>
				<tr>
					<td>
						<?= $data['nama']; ?>
					</td>
					<td>
						<?= $data['user']; ?>
					</td>
					<td>
						<?= $data['level']; ?>
					</td>
					<td>
						<a href="ubah.php?id=<?= $data['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $data['id']; ?>">hapus</a>
					</td>
				</tr>
			</tbody>
		<?php endwhile ?>
	</table>
	<a href="admin.php">kembali</a>
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