	<!DOCTYPE html>
	<html>
	<head>
		<title>data produk</title>
		<style type="text/css">
		*{
			font-family: "Trebuchet MS";
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
		h1{
			text-transform: uppercase;
			color: salmon;
		}
		input{
			padding: 5px;
			width: 100%;
			box-sizing: border-box;
			background: #f8f8ff;
			border: 2px solid #ccc;
			outline-color: salmon;
		}
		div{
			width: 100%;
			height: auto;
		}
		a.b {
		background-color: salmon;
			color: #fff;
			padding: 10px;
			text-decoration: none;
			font-size: 12px;
			border: 0px;
			float: right;
			margin-top: 20px;
	}
		.base{
			width: 500px;
			height: auto;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			background: #ededed
		}
		</style>
	</head>
	<body>
	<center>
		<h1>Tambah Produk</h1>
	</center>
		<form action="proses.php" method="post" enctype="multipart/form-data">
			<section class="base">
				<div>
					<label for="nama">Nama Produk</label>
					<input type="text" name="nama" id="nama" autofocus="" required=""></input>
				</div>
				<div>
					<label for="deskripsi">Deskripsi Produk</label>
					<input type="text" name="deskripsi" id="deskripsi" required=""></input>
				</div>
				<div>
					<label for="beli">Harga Beli</label>
					<input type="text" name="beli" id="beli" required=""></input>
				</div>
				<div>
					<label for="jual">Harga Jual</label>
					<input type="text" name="jual" id="jual" required=""></input>
				</div>
				<div>
					<label for="gambar">gambar Produk</label>
					<input type="file" name="gambar" id="gambar" required=""></input>
				</div>
				<div>
					<button name="simpan">Simpan Produk</button>
					<a class="b" href="halaman.php?page=penjualan" title="input data user">batal</a>
				</div>
			</section>
		</form>
	</body>
	</html>