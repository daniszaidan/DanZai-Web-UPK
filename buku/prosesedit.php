<?php

	include("../koneksi.php");
	$id = $_POST['id_buku'];

	mysql_query("UPDATE buku set 
		id_buku			= '$_POST[id_buku]',
		judul 			= '$_POST[judul]',
		noisbn			= '$_POST[noisbn]',
		penulis			= '$_POST[penulis]',
		tahun			= '$_POST[tahun]',
		stok			= '$_POST[stok]',
		harga_pokok		= '$_POST[harga_pokok]',
		harga_jual		= '$_POST[harga_jual]',
		ppn				= '$_POST[ppn]',
		diskon			= '$_POST[diskon]' where id_buku=$id ");

	header("location:index.php");

?>