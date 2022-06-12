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

		$nama = htmlspecialchars($data['nama']);
		$email = htmlspecialchars($data['email']);
		$isi = htmlspecialchars($data['isi']);

		$query = "INSERT INTO fedback VALUES ('','$nama','$email','$isi')";

		mysqli_query($konek,$query);

		return mysqli_affected_rows($konek);
	}



 ?>