<?php

	include("../koneksi.php");

	mysql_query("INSERT INTO kasir set 
		id_kasir		= '$_POST[id_kasir]',
		nama			= '$_POST[nama]',
		alamat			= '$_POST[alamat]',
		telepon			= '$_POST[telepon]',
		status			= '$_POST[status]',
		username		= '$_POST[username]',
		password		= '$_POST[password]',
		akses			= '$_POST[akses]' ");

	header("location:index.php");

?>