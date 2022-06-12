<?php 
// ini buat koneksi
include 'function.php';

//jika tombol registrasi di tekan

if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0) {
		echo "
			<script>
			alert('Registrasi Berhasil');
			</script>
		";
	} else {

		echo mysqli_error($koneksi);
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<H1>Halaman Registrasi</H1>
	<form action="" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td>konfirmasi password</td>
			<td><input type="text" name="password2"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="register" value="register">
			</td>
		</tr>

	</table>
	</form>

</body>
</html>