<?php

	include("koneksi.php");


	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$login 	= mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$password'");
		$row 	= mysqli_fetch_array($login);

		if ($row != null AND $row['username'] == $username AND $row['password'] == $password){
		  session_start();

		  $_SESSION['username'] = $row['username'];
		  $_SESSION['password'] = $row['password'];
		  $_SESSION['data'] = $row['username'];

		  header("location:http://localhost/DanZai%20Web%20UPK/buku/");
		}
		else{
			header("location:index.php");
		}
		
	}
	else{
		header("location:index.php");
	}

?>