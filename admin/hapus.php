<?php 
	include 'function.php';

	$id = $_GET['id'];

	if(hapus($id)){
		echo "
			<script>
				alert('Data Terhapus');
				document.location.href = 'data.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'data.php';
			</script>
		";
	}
 ?>