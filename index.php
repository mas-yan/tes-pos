<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="aksi.php" method="post">
		<h2 align="center">login</h2>
		<table align="center" cellpadding="10" cellspacing="5">
			<tr>
				<td>
					<label for="user">username : </label>
					<input type="text" name="user" id="user" required="required" placeholder="masukkan username"></input>
				</td>
			</tr>
			<tr>
				<td>
					<label for="pass">password : </label>
					<input type="password" name="pass" id="pass" required="required" placeholder="masukkan password"></input>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="masuk" value="login"></input>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>