<?php 
session_start();
include 'koneksi.php';
if (isset($_SESSION['user'])) {

	if ($_SESSION['level'] != 'penjual') {
		die('anda bukan penjual');
	}
	$query = "SELECT * FROM produk ORDER BY id ASC";
			$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>penjual</title>
	<style type="text/css">
	*{
		font-family: "Trebuchet MS";
	}
	h1{
		text-transform: uppercase;
		color: salmon;
	}
	table{
		border: solid 1px #DDEEEE;
		border-collapse: collapse;
		border-spacing: 0;
		width: 70%;
		margin: auto auto 20px auto;
	}
	table thead th {
		background-color: #DDEFEF;
		border: solid;
		color: #336B6B;
		padding: 10px;
		text-align: center;
		text-shadow: 1px 1px 1px #fff;
		text-decoration: none;
	}
	table tbody td{
		border: solid;
		color: #333;
		padding: 10px;
		text-shadow: 1px 1px 1px #fff;
	}
	a {
		background-color: salmon;
		color: #fff;
		padding: 10px;
		text-decoration: none;
		font-size: 12px;
	}
	</style>
</head>
<body>
	<center><h1>Data Produk</h1></center>
	<center><h2 align="center">TOTAL : <?= mysqli_num_rows($result); ?></h2></center>
	<br/>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Deskripsi</th>
				<th>Harga Beli</th>
				<th>Harga Jual</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			$no = 1;
			while ($row = mysqli_fetch_assoc($result)):?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $row['nama_produk']; ?></td>
				<td><?= substr($row['deskripsi'], 0, 20); ?>...</td>
				<td>Rp <?= number_format($row['harga_beli'],0,',','.') ?></td>
				<td>Rp <?= number_format($row['harga_jual'],0,',','.') ?></td>
				<td style="text-align: center;"><img src="gambar/<?= $row['gambar_produk'];?>" style="width: 100px;"></td>
				<td>
				<center>
					<a href="edit_produk.php?id=<?= $row['id'];?>">Edit</a> | 
					<a href="hapus_produk.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin ingin menghapus?')" >hapus</a>
					</center>
				</td>
			</tr>
			 <?php $no++; endwhile ?>
		</tbody>
	</table>
	<center><a href="data_produk.php">+ &nbsp; Tambah Produk</a></center>
	<a href="logout.php"onclick = "return confirm('yakin ingin keluar')">keluar</a>
</body>
</html>
<?php
}else{
	?>
	<script type="text/javascript">
		alert('anda belum login');
		document.location='index.php';
	</script>
	<?php
}

 ?>