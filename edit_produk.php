<?php 

include 'koneksi.php';

if (isset($_GET['id'])) {
	$id = ($_GET['id']);

	$query = "SELECT * FROM produk WHERE id = $id";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query error:".mysqli_errno($conn));
		"-".mysqli_error($conn);

	}
	$data = mysqli_fetch_assoc($result);

	if (!count($data)) {
		echo "<script>
		alert('data tidak di temukan pada database');
		window.location='halaman.php?page=penjualan';
		</script>";
	}
}else{
	echo "<script>
	alert('masukkan  data id');
	window.location='halaman.php?page=penjualan';
	</script>";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>ubah</title>
 	<style type="text/css">
 	*{
 		font-family: "Trebuchet MS"
 	}
 	h1{
 		text-transform: uppercase;
 		color: salmon;
 	}
 	button{
 		background-color: salmon;
 		color: #fff;
 		padding: 10px;
 		text-decoration: none;
 		font-size: 12px;
 		border: 0px;
 		margin-top: 20px;
 	}
 	label{
 		margin-top: 10px;
 		float: left;
 		text-align: left;
 		width: 100%;
 	}
 	input{
 		padding: 6px;
 		width: 100%;
 		box-sizing: border-box;
 		background: #f8f8f8;
 		border: 2px solid #ccc;
 		outline-color: salmon;
 	}
 	div{
 		width: 100%;
 		height: auto;
 	}
 	.base{
 		width: 500px;
 		height: auto;
 		padding: 20px;
 		margin-left: auto;
 		margin-right: auto;
 		background: #ededed;
 	}
 	</style>
 </head>
 <body>
 	<center>
 		<h1>Edit <?= $data['id']; ?></h1>
 	</center>
 	<form action="proses_edit.php" method="post" enctype="multipart/form-data">
 		<section class="base">
 			<input name="id" value="<?= $data['id']; ?>" hidden ></input>
 			<div>
 				<label for="nama">Nama Produk</label>
 				<input type="text" name="nama" value="<?= $data['nama_produk'] ?>" id="nama" autofocus="" required=""></input>
 			</div>
 			<div>
 				<label for="deskripsi">deskripsi Produk</label>
 				<input type="text" name="deskripsi" value="<?= $data['deskripsi'] ?>" id="deskripsi" required=""></input>
 			</div>
 			<div>
 				<label for="harga">harga beli</label>
 				<input type="text" name="harga" value="<?= $data['harga_beli'] ?>" id="harga" required=""></input>
 			</div>
 			<div>
 				<label for="jual">harga jual</label>
 				<input type="text" name="jual" value="<?= $data['harga_jual'] ?>" id="jual" required=""></input>
 			</div>
 			<div>
 				<label for="gambar">gambar Produk</label>
 				<img src="gambar/<?= $data['gambar_produk'] ?>" style="width: 120px; float: left; margin-bottom: 5px;">
 				<input type="file" name="gambar" id="gambar"></input>
 				<i style="float: left; font-size: 11px; color: red;">Abaikan jika tidakmerubah gambar produk</i>
 			</div>
 			<div>
 				<button type="submit">Simpan perubahan</button>
 				<a class="b" href="halaman.php?page=penjualan" title="input data user">batal</a>
 			</div>
 		</section>
 	</form>
 </body>
 </html>