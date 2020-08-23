<?php

	include("../koneksi.php");
	$id = $_POST['id_distributor'];

	mysql_query("UPDATE distributor set 
		id_distributor	= '$_POST[id_distributor]',
		nama_distributor	= '$_POST[nama_distributor]',
		alamat			= '$_POST[alamat]',
		telepon			= '$_POST[telepon]' where id_distributor=$id ");

	header("location:index.php");

?>