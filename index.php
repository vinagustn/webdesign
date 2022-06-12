<?php 
//Jalankan dulu session
session_start();

//jika sudah login maka masuk ke tampil.php
if (isset($_SESSION["login"])) {
		header("location: index.php");
		exit;
	}	

//buat koneksi terlebihdahlu
include 'function.php';

//Untuk Register

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



//kondisi jika tombol login di tekan user

if (isset($_POST["login"])) {
		
	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' and password = '$password'");

	$cek = mysqli_num_rows($result);
	
		if ($cek > 0) {
				echo "
				<script>
					alert('Login Berhasil');
					document.location.href = 'user/index.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Username atau Password Salah');
					document.location.href = 'index.php';
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
<?php 
if( isset($error)): ?>
<p> Username / Password Anda Salah, Silahkan Coba Lagi..!</p>
<?php 
endif; 
?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="password2" placeholder="Confirm Password" required="">
					<button type="submit" name="register" class="btn-login">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="login" class="btn-login">Login</button>
					<a href="loginadmin.php" class="pilih" style="text-decoration: none; color: steelblue; padding-left: 100px;">Login Sebagai Admin</a>
				</form>
			</div>
	</div>
</body>
</html>
