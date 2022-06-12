<?php 

	//koneksi database
	$konek = mysqli_connect("localhost","root","","db_sembako");

	function query($query){
		global $konek;

		$show = mysqli_query($konek, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($show)) {
			$rows[] = $row;
		}
		return $rows;
	}

	//input data
	function simpan($data){
		global $konek;

		$jenis = htmlspecialchars($data['jenis']);
		$merk = htmlspecialchars($data['merk']);
		$stok = htmlspecialchars($data['stok']);
		$berat = htmlspecialchars($data['berat']);
		$satuan = htmlspecialchars($data['satuan']);
		$harga = htmlspecialchars($data['harga']);

		$query = "INSERT INTO data VALUES ('','$jenis','$merk','$stok','$berat','$satuan','$harga')";

		mysqli_query($konek,$query);

		return mysqli_affected_rows($konek);
	}


	//hapus data
	function hapus($id){
		global $konek;

		mysqli_query($konek,"DELETE FROM data WHERE id = $id");

		return mysqli_affected_rows($konek);
	}

	//edit data
	function edit($data){
		global $konek;

		$id = $data['id'];

		$jenis = htmlspecialchars($data['jenis']);
		$merk = htmlspecialchars($data['merk']);
		$stok = htmlspecialchars($data['stok']);
		$berat = htmlspecialchars($data['berat']);
		$satuan = htmlspecialchars($data['satuan']);
		$harga = htmlspecialchars($data['harga']);

		$query = "UPDATE data SET 
		jenis = '$jenis',
		merk = '$merk',
		jumlah = '$stok',
		berat = $berat,
		satuan = '$satuan',
		harga = '$harga'
		WHERE id = $id";

		mysqli_query($konek,$query);

		return mysqli_affected_rows($konek);
	}

 ?>