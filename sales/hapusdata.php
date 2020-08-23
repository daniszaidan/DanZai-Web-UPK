<?php

	include("../koneksi.php");

	$id = $_GET['id'];
	mysql_query("DELETE FROM pasok where id_pasok=$id ");

	header("location:index.php");

?>