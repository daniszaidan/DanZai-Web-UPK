
<html>
<head>
	<title>DanZai Book Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/font-awesome.min.css"/>
</head>
<body>

	<div class="sidebar">
        <nav>
            <ul>
                <div id="logo">
                    <img src="../image/logo.png">
                    <a href="">DanZai Book Store</a>
                </div>
                <div class="garis"></div>
                <li><a class="jaraklogo" href="http://localhost/ujianpraktikkejuruan/danis/">
                    <i class="fa fa-home setli"></i>Home</a></li>
                <li><a href="http://localhost/ujianpraktikkejuruan/danis/buku">
                    <i class="fa fa-book setli"></i>Buku</a></li>
                    <li><a href="http://localhost/ujianpraktikkejuruan/danis/distributor">
                    <i class="fa fa-book setli"></i>Distributor</a></li>
                <li><a href="http://localhost/ujianpraktikkejuruan/danis/kasir">
                    <i class="fa fa-dollar setli"></i>Kasir</a></li>
                <li><a href="http://localhost/ujianpraktikkejuruan/danis/penjualan">
                    <i class="fa fa-calculator setli"></i>Penjualan</a></li>
                <li><a href="http://localhost/ujianpraktikkejuruan/danis/sales">
                    <i class="fa fa-user setli"></i>Seles</a></li>

                    <a class="footer">Admin Dashboard Back-End<br>Created By DanZai &copy 2017</a>
            </ul>
        </nav>
    </div>
    <div class="mainbar">
        <header>
            <a class="akun">Hi DanZai, Welcome Back</a><a class="logout" href="#"><i class="fa fa-sign-out"></i>Log Out</a>
        </header>
        <div class="isi">
        <?php

            include("../koneksi.php");

            $id = $_GET['id'];
            $data = mysql_query("SELECT * FROM distributor where id_distributor=$id ");
            $cetak = mysql_fetch_row($data);
                        $id_distributor     = $cetak[0];
                        $nama_distributor   = $cetak[1];
                        $alamat             = $cetak[2];
                        $telepon            = $cetak[3];
        ?>
            <div class="tempat-edit">
                <a>Input Data Buku</a>
                <form action="prosesedit.php" method="POST">
                    <input type="text" name="id_distributor" value="<?php echo $id_distributor ?>" >
                    <input type="text" name="nama_distributor" value="<?php echo $nama_distributor ?>">
                    <input type="text" name="alamat" value="<?php echo $alamat ?>">
                    <input type="text" name="telepon" value="<?php echo $telepon ?>">
                    <button type="submit">Submit<i style="padding-left: 10px;" class="fa fa-send"></i></button> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>