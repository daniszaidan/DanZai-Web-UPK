<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/font-awesome.min.css"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

	<div class="container">
		<div class="formregister">
			<form method="POST" action="">
				<h1>Register</h1>
				<input type="text" name="nama" placeholder="Masukkan Nama">
				<input type="text" name="username" placeholder="Masukkan Username">
				<input type="text" name="email" placeholder="Masukkan Email">
				<input type="password" name="password" placeholder="Masukkan Password">
				<input type="submit" name="submit" value="submit">
			</form>
		</div>

		<div id="notification">
			<div class="isinotif">
				<p class="headnotif">Berhasil Register</p>
				<p>Halaman akan dialihkan ke Halaman Login</p>
				<a class="removenotif" href=""><i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</div>


	<?php 

	include("koneksi.php");

	if (isset($_POST['submit'])) {

		$_SESSION['pesan'] = 'penambahan data berhasil';

		$nama 		= $_POST['nama'];
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		$connect->query("insert into `user` (`nama`, `username`, `email`, `password`) values ('$nama', '$username', '$email', '$password')");
	}

		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
			// echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';
			// echo '	<div class="notification" id="notification">
			// 			<div class="isinotif">
			// 				<p class="headnotif">Berhasil Register</p>
			// 				<p>Halaman akan dialihkan ke Halaman Login</p>
			// 				<a class="removenotif" href=""><i class="fas fa-arrow-right"></i></a>
			// 			</div>
			// 		</div>';
			echo "	<script>
						var notif = document.getElementById('notification');
						notif.style.cssText = 'right: 0; transition: all 0.5s;';
					</script>";
		} 
		$_SESSION['pesan'] = '';

	?>

</body>
</html>