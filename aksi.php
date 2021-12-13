<?php 

session_start();

include 'koneksi.php';

$user = $_POST['user'];
$pass = $_POST["pass"];

$qry = mysqli_query($conn,"SELECT * FROM user WHERE user = '$user' AND pass = '$pass' ");

$cek = mysqli_num_rows($qry);
if ($cek >0) {
	$data = mysqli_fetch_assoc($qry);
	$_SESSION['nama'] = $data['nama'];

switch ($data['level']) {
	case 'admin':

	$_SESSION['user'] = $user;
	$_SESSION['level'] = 'admin';

	header("location:admin.php");
		break;
	case 'penjual':

	$_SESSION['user'] = $user;
	$_SESSION['level'] = 'penjual';

	header("location:halaman.php");
		break;

	case 'pembeli':

	$_SESSION['user'] = $user;
	$_SESSION['level'] = 'pembeli';

	header("location:pembeli.php");
		break;
	
	default:
		echo "<script>
	alert('usernamae atau pasword salah');
	document.location='index.php';
	</script>";
		break;
}

}else{

	echo "<script>
	alert('usernamae atau pasword salah');
	document.location='index.php';
	</script>";
}

 ?>