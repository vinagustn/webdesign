<?php 
	include 'function.php';

	$id = $_GET['id'];

	$data = query("SELECT * FROM data WHERE id = $id")[0];

	if(isset($_POST['ubah'])){
		if(edit($_POST) > 0){
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'data.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Diubah');
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
					<li><a href="tampil.php">Input Data</a></li>
					<li><a href="data.php">Data Gudang</a></li>
					<li><a href="kontak.php">Kontak Kami</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="../logout.php">Log Out</a></li>
				</ul>
			</div>

			<div class="konten">
				<h2>Update Data</h2>
				<table align="center">
					<tr>
						<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
					</tr>
					<tr>
						<td width="150">Jenis Barang</td>
						<td>
							<input type="text" name="jenis" style="width: 250px;" required="" value="<?php echo $data['jenis'] ?>">
						</td>
					</tr>
					<tr>
						<td>Merk Barang</td>
						<td>
							<input type="text" name="merk" style="width: 250px;" required="" value="<?php echo $data['merk'] ?>">
						</td>
					</tr>
					<tr>
						<td>Jumlah Stok</td>
						<td>
							<input type="text" name="stok" style="width: 250px;" required="" value="<?php echo $data['jumlah'] ?>">
						</td>
					</tr>
					<tr>
						<td>Berat</td>
						<td>
							<input type="text" name="berat" style="width: 250px;"required="" value="<?php echo $data['berat'] ?>">
						</td>
					</tr>
					<tr>
						<td>Satuan Berat</td>
						<td>
							<input type="text" name="satuan" style="width: 250px;" required="" value="<?php echo $data['satuan'] ?>">
						</td>
					</tr>
					<tr>
						<td>Harga per Satuan</td>
						<td>
							<input type="text" name="harga" style="width: 250px;" required="" value="<?php echo $data['harga'] ?>">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="ubah" value="Update" style="border-radius: 5px;height: 27px; width: 70px;">
						</td>
					</tr>
				</table>
			</div>

		</div>
	</form>
</body>
</html>