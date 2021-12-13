<?php 
session_start();
include 'koneksi.php';

if (isset($_SESSION['user'])) {

if ($_SESSION["level"]!= "penjual") {
	die("anda  bukan admin");
}

function hapus($id){
	global $conn;
	$sql = mysqli_query($conn,"DELETE FROM produk WHERE id = $id");

	return mysqli_affected_rows($conn);
}

$id = $_GET["id"];

if (hapus($id)>0) {
	echo "<script>
	alert('produk berhasil dihapus');
	document.location='penjual.php';
	</script>";
}else{
	echo "<script>
	alert('produk gagal dihapus');
	document.location='penjual.php';
	</script>";
}

}else{
	?>
	<script type="text/javascript">
		alert("anda belum login");
		document.location="index.php";
	</script>
	<?php } ?>