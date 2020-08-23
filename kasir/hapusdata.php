<?php

	include("../koneksi.php");

	$id = $_GET['id'];
	mysql_query("DELETE FROM kasir where id_kasir=$id ");

	header("location:index.php");

?>