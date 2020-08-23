<?php

	include("../koneksi.php");

	mysql_query("INSERT INTO penjualan set 
		id_penjualan	= '$_POST[id_penjualan]',
		id_buku			= '$_POST[id_buku]',
		id_kasir		= '$_POST[id_kasir]',
		jumlah			= '$_POST[jumlah]',
		total			= '$_POST[total]',
		tanggal			= '$_POST[tanggal]' ");

	header("location:index.php");

?>