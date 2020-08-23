<?php

	include("../koneksi.php");
	$id = $_POST['id_kasir'];

	mysql_query("UPDATE kasir set 
		id_kasir		= '$_POST[id_kasir]',
		nama			= '$_POST[nama]',
		alamat			= '$_POST[alamat]',
		telepon			= '$_POST[telepon]',
		status			= '$_POST[status]',
		username		= '$_POST[username]',
		password		= '$_POST[password]',
		akses			= '$_POST[akses]' where id_kasir=$id ");

	header("location:index.php");

?>