<?php
include 'koneksi.php';
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$beli = $_POST['beli'];
	$jual = $_POST['jual'];
	$gambar = $_FILES['gambar']['name'];

	if ($gambar != "") {
		$ekstensi_boleh = array("png","jpg");
		$x = explode(".",$gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['gambar']['tmp_name'];
		$acak = rand(1,999);
		$nama_gambar = $acak.'_'.$gambar;
		if (in_array($ekstensi, $ekstensi_boleh) === true) {
			move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar);
	 	$query = "INSERT INTO produk VALUES
	 			  ('','$nama','$deskripsi','$beli','$jual','$gambar')";
	 	$result = mysqli_query($conn,$query);

	 	if (!$result) {
	 		die('gagal: '.mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	 	}else{
	 		echo"<Script>
	alert('produk berhasil di tambahkan');
	document.location='halaman.php?page=penjualan';
	</script>";
	 	}
		}else{
			echo "<script>
			alert('ekstensi yg hanya diperbolehkan hanya jpg atau png');
			window.location='data_produk.php';
			</script>";
		}
	}
	?>