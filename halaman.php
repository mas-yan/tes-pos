<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="penjual"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
include 'koneksi.php';
$query = mysqli_query($conn,"SELECT * FROM produk");
$row = mysqli_fetch_assoc($query);
?>
<html>
<head>
<title>Aplikasi Gudang</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: relative;
    top: 0.5em;
    width: 11em;
}
ul.navbar li {
    background: #E6E6FA;
    margin: 0.5em 0;
    padding: 0.3em;
    border-right: 0.5em solid #FF6600;
}
ul.navbar a {
    text-decoration: none;
}
h1 {
    font-family: Helvetica, Geneva, Arial, Sans-Regular, sans-serif
}
address {
    margin-top: 1em;
    padding-top: 1em;
    border-top: thin dotted
}
	a:link,a:visited,a:active {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	text-decoration: none;
}
a:hover {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: blue;
	text-decoration: none;
}

.header {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #fff;
	background-color: #f85252;
	font-weight: bold;
}
.header1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: #fff;
	background-color: #f85252;
	font-weight: bold;
	}
</style>
</head>
<body>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#f85252">&nbsp;</td>
	<td width="140" height="120" bgcolor="#f85252"><div align="center"><img src="image/bp.png" width="100" height="90"></div></td>
	<td width="10" bgcolor="#f85252">&nbsp;</td>
	<td width="1136" bgcolor="#f85252"><div align="center"><span class="header">APLIKASI PENJUALAN<br><br></span>
	<span class="header1">PERSADA MAKMUR<br></span></div></td>
	<td width="10" bgcolor="#f85252"></td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><strong><? echo "Tanggal : ".date("d-M-y");?></strong></div></td>
	<td>&nbsp;</td>
	<td align="right">Selamat Datang&nbsp;<font color="#FF6600"><strong> <?=$_SESSION['nama']?></strong></font>&nbsp;|&nbsp;<a href="logout.php" onclick = "return confirm('yakin ingin keluar')">Log Out >>&nbsp;&nbsp;</a></td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#B0C4DE">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top">
	<table border="0" cellspacing="0" bgcolor="#B0C4DE" cellpadding="0" align="top">
		<tr bgcolor="#B0C4DE">
		<td valign="top"><ul class="navbar">
			<li><b>MAIN MENU</b></li><br>
			<li><a href="halaman.php?page=penjualan" title="input data user">&nbsp;Management</a></li>
			<li><a href="halaman.php?page=edit_produk.php?id=<?= $row['id']; ?>" title="input data user">&nbsp;Management</a></li>
			<li><a href="halaman.php?page=penjualan" title="input data user">&nbsp;Management</a></li>

		</ul></td>
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'penjualan' : include "penjualan.php"; break;
				case 'data_produk': include 'data_produk.php'; break;
				case 'edit_produk' : include "edit_produk.php"; break;
				case 'input-data-user' : include "input-data-user.php"; break;
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#B0C4DE">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#B0C4DE">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#B0C4DE">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#f85252">
	<td height="5" colspan="5" bgcolor="#f85252"><div align="center" style="margin:5 10px 0 0;"><h3 style= "color:#ffffff;">Development 2019 | by Riyan Alfian</h3></div></td>
</table>
</body>
</html>