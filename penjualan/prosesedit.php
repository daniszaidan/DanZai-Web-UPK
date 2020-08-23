<?php

	include("../koneksi.php");
	$id = $_POST['id_penjualan'];

	mysql_query("UPDATE penjualan set 
		id_penjualan	= '$_POST[id_penjualan]',
		id_buku			= '$_POST[id_buku]',
		id_kasir		= '$_POST[id_kasir]',
		jumlah			= '$_POST[jumlah]',
		total			= '$_POST[total]',
		tanggal			= '$_POST[tanggal]' where id_penjualan=$id ");

	header("location:index.php");

?>