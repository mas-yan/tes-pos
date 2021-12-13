<?php 

session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level']!= 'admin') {
		die("anda bukan admin");
	}
	if (isset($_POST['input'])) {
		echo"<Script>
	alert('user berhasil di tambahkan');
	document.location='management.php';
	</script>";
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$level= $_POST['level'];

	$query = "INSERT INTO user VALUES
	          ('','$nama','$user','$pass','$level')";

	$sql = mysqli_query($conn,$query);
	}
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h2 align="center">tambah user</h2>
			<form action="" method="post">
				<table align="center" cellpadding="10" cellspacing="5">
					<tr>
						<td>
							<label for="nama">Nama</label>
						</td>
						<td>
							<input type="text" name="nama" id="nama" required="required"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label for="username">Username</label>
						</td>
						<td>
							<input type="text" name="username" id="username" required="required"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label for="password">Password</label>
						</td>
						<td>
							<input type="text" name="password" id="password" required="required"></input>
						</td>
					</tr>
					<tr>
						<td>
							<label for="level">Level</label>
						</td>
						<td>
							<select name="level" id="level" required="required">
								<option value="admin">admin</option>
								<option value="penjual">penjual</option>
								<option value="pembeli">pembeli</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="tambah" name="input"></input>
						</td>
						<td>
							<input type="reset"></input>
						</td>
					</tr>
				</table>
				<a href="management.php">kembali</a>
			</form>
		</body>
		</html>
		<?php
}else{
	echo"<Script>
	alert('anda belum login');
	document.location='index.php';
	</script>";
}

 ?>