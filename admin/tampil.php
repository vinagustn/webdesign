<?php 
	include 'function.php';

	if(isset($_POST['save'])){
		if(simpan($_POST) > 0){
			echo "
				<script>
					alert('Data Tersimpan');
					document.location.href = 'data.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Disimpan');
					document.location.href = 'data.php';
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
					<li><a href="index.php">Input Data</a></li>
					<li><a href="data.php">Data Gudang</a></li>
					<li><a href="kontak.php">Kontak Kami</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="../logout.php">Log Out</a></li>
				</ul>
			</div>

			<div class="konten">
				<h2>Silahkan Input Data Sembako</h2>
				<table align="center">
					<tr>
						<td width="150">Jenis Barang</td>
						<td>
							<input type="text" name="jenis" style="width: 250px;">
						</td>
					</tr>
					<tr>
						<td>Merk Barang</td>
						<td>
							<input type="text" name="merk" style="width: 250px;">
						</td>
					</tr>
					<tr>
						<td>Jumlah Stok</td>
						<td>
							<input type="text" name="stok" style="width: 250px;">
						</td>
					</tr>
					<tr>
						<td>Berat</td>
						<td>
							<input type="text" name="berat" style="width: 250px;">
						</td>
					</tr>
					<tr>
						<td>Satuan Berat</td>
						<td>
							<input type="radio" name="satuan" value="Kilogram">Kilogram
							<input type="radio" name="satuan" value="Liter">Liter
							<input type="radio" name="satuan" value="Ons">Ons
							<input type="radio" name="satuan" value="Gram">Gram
						</td>
					</tr>
					<tr>
						<td>Harga per Satuan</td>
						<td>
							<input type="text" name="harga" style="width: 250px;">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="save" value="Simpan" style="border-radius: 5px;height: 27px; width: 70px;">
						</td>
					</tr>
				</table>
			</div>

		</div>
	</form>
</body>
</html>