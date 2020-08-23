<?php

	include("../koneksi.php");

	mysql_query("INSERT INTO distributor set 
		id_distributor	= '$_POST[id_distributor]',
		nama_distributor	= '$_POST[nama_distributor]',
		alamat			= '$_POST[alamat]',
		telepon			= '$_POST[telepon]' ");

	header("location:index.php");

?>