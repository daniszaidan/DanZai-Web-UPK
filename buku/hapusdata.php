<?php

	include("../koneksi.php");

	$id = $_GET['id'];
	mysql_query("DELETE FROM buku where id_buku=$id ");

	header("location:index.php");

?>