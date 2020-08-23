<?php

	include("../koneksi.php");

	$id = $_GET['id'];
	mysql_query("DELETE FROM penjualan where id_penjualan=$id ");

	header("location:index.php");

?>