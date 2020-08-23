
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
            $data = mysql_query("SELECT * FROM kasir where id_kasir=$id ");
            $cetak = mysql_fetch_row($data);
                        $id_kasir           = $cetak[0];
                        $nama               = $cetak[1];
                        $alamat             = $cetak[2];
                        $telepon            = $cetak[3];
                        $status             = $cetak[4];
                        $username           = $cetak[5];
                        $password           = $cetak[6];
                        $akses              = $cetak[7];

        ?>
            <div class="tempat-edit">
                <a>Input Data Buku</a>
                <form action="prosesedit.php" method="POST">
                    <input type="text" name="id_kasir" value="<?php echo $id_kasir ?>" >
                    <input type="text" name="nama" value="<?php echo $nama ?>">
                    <input type="text" name="alamat" value="<?php echo $alamat ?>">
                    <input type="text" name="telepon" value="<?php echo $telepon ?>">
                    <input type="text" name="status" value="<?php echo $status ?>">
                    <input type="text" name="username" value="<?php echo $username ?>">
                    <input type="text" name="password" value="<?php echo $password ?>">
                    <input type="text" name="akses" value="<?php echo $akses ?>">
                    <button type="submit">Submit<i style="padding-left: 10px;" class="fa fa-send"></i></button> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>