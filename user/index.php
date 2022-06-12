<?php 
	include 'function.php';

	$show = query("SELECT * FROM data");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventori Toko Sembako Kita</title>
	<link rel="stylesheet" type="text/css" href="CSS/tampil.css">
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
				<h2>List Data Sembako</h2>
				<table border="1px" align="center">
					<tr>
						<th>No.</th>
						<th>Jenis Barang</th>
						<th>Merk Barang</th>
						<th>Jumlah Stok</th>
						<th>Berat per Barang</th>
						<th>Satuan Berat</th>
						<th>Harga per Satuan</th>
					</tr>

					<?php $i = 1; ?>
					<?php foreach ($show as $row): ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $row['jenis']; ?></td>
							<td><?php echo $row['merk']; ?></td>
							<td><?php echo $row['jumlah']; ?></td>
							<td><?php echo $row['berat']; ?></td>
							<td><?php echo $row['satuan']; ?></td>
							<td><?php echo $row['harga']; ?></td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</table>
			</div>

		</div>
	</form>
</body>
</html>