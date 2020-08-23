<?php

	include("../koneksi.php");

	$id = $_GET['id'];
	mysql_query("DELETE FROM distributor where id_distributor=$id ");

	header("location:index.php");

?>