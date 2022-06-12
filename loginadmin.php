<?php 
//Jalankan dulu session
session_start();

//jika sudah login maka masuk ke tampil.php
if (isset($_SESSION["login"])) {
		header("location: loginadmin.php");
		exit;
	}	

//buat koneksi terlebihdahlu
include 'functionadmin.php';


//kondisi jika tombol login di tekan user

if (isset($_POST["login"])) {
		
	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");

	$cek = mysqli_num_rows($result);
	
		if ($cek > 0) {
				echo "
				<script>
					alert('Login Sebagai Admin Berhasil');
					document.location.href = 'admin/tampil.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Username atau Password Salah');
					document.location.href = 'loginadmin.php';
				</script>
			";
		}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php if( isset($error)): ?>
<p> Username / Password Anda Salah, Silahkan Coba Lagi..!</p>
<?php endif; 
?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="login" class="btn-login">Login</button>
					<a href="index.php" class="pilih" style="text-decoration: none; color: white; padding-left: 105px;">Login Sebagai User</a>
				</form>
			
			</div>
	</div>
</body>
</html>
