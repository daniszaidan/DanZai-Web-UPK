<?php

	include("../koneksi.php");

	mysql_query("INSERT INTO pasok set 
		id_pasok		= '$_POST[id_pasok]',
		id_distributor	= '$_POST[id_distributor]',
		id_buku			= '$_POST[id_buku]',
		jumlah			= '$_POST[jumlah]',
		tanggal			= '$_POST[tanggal]' ");

	header("location:index.php");

?>