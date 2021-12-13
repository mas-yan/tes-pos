<?php 

session_start();

if (isset($_SESSION['user'])) {
	session_destroy();
	?>
	<script type="text/javascript">
		alert("anda berhasil keluar");
		document.location='index.php';
	</script>
<?php
}else{
	echo "<script>
	alert('anda belum login');
		document.location='index.php';
	</script>";
}


 ?>