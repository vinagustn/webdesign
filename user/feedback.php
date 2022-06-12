<?php 
//buat koneksi
include 'function.php';

if(isset($_POST["kirim"])){
	if(simpan ($_POST) > 0){
		echo "

			<script>
				alert('Terimakasih Telah Memberi Masukan');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Masukan Anda Gagal, Silahkan Coba lagi');
				document.location.href = 'index.php';
			</script>
		";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventori Toko Sembako Kita</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<form action="" method="post">
		<div class="container">

			<div class="hero"></div>

			<div class="header">
				<h2>SISTEM INVENTORI</h2>
				<h3>"TOKO SEMBAKO KITA"</h3>
				<ul>
					<li><a href="index.php">Lihat Data</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="kontak.php">Kontak Kami</a></li>
					<li><a href="feedback.php">Form Feedback</a></li>
					<li><a href="../logout1.php">Log Out</a></li>
				</ul>
			</div>
			<div class="konten">
				<h2>Form Feedback</h2>
				<table border="1px" align="center">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" id="nama" style="border:2px solid silver; font-family:helvetica;"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" id="email" style="border:2px solid silver; font-family:helvetica;"></td>
					</tr>
					<tr>
						<td>Feedback</td>
						<td><input type="textarea" name="isi" id="isi" style="width:auto; height:100px; margin-top:10px; border:2px solid silver; font-family:helvetica;"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="kirim" id="kirim" style="border-radius: 5px;height: 27px; width: 70px;"></td>
					</tr>
				</table>
			</div>


		</div>
	</form>
</body>
</html>
