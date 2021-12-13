<?php 
session_start();
include 'koneksi.php';

if (isset($_SESSION['user'])) {

if ($_SESSION["level"]!= "admin") {
	die("anda  bukan admin");
}

function hapus($id){
	global $conn;
	$sql = mysqli_query($conn,"DELETE FROM user WHERE id = $id");

	return mysqli_affected_rows($conn);
}

$id = $_GET["id"];

if (hapus($id)>0) {
	echo "<script>
	alert('user berhasil dihapus');
	document.location='management.php';
	</script>";
}else{
	echo "<script>
	alert('user gagal dihapus');
	document.location='management.php';
	</script>";
}

}else{
	?>
	<script type="text/javascript">
		alert("anda belum login");
		document.location="index.php";
	</script>
	<?php } ?>