<?php

	include("../koneksi.php");
	$id = $_POST['id_pasok'];

	mysql_query("UPDATE pasok set 
		id_pasok		= '$_POST[id_pasok]',
		id_distributor	= '$_POST[id_distributor]',
		id_buku			= '$_POST[id_buku]',
		jumlah			= '$_POST[jumlah]',
		tanggal			= '$_POST[tanggal]' where id_pasok=$id ");

	header("location:index.php");

?>