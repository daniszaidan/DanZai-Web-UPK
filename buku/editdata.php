
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
            $data = mysql_query("SELECT * FROM buku where id_buku=$id ");
            $cetak = mysql_fetch_row($data);
                        $id_buku        = $cetak[0];
                        $judul          = $cetak[1];
                        $noisbn         = $cetak[2];
                        $penulis        = $cetak[3];
                        $tahun          = $cetak[4];
                        $stok           = $cetak[5];
                        $harga_pokok    = $cetak[6];
                        $harga_jual     = $cetak[7];
                        $ppn            = $cetak[8];
                        $diskon         = $cetak[9];
        ?>
            <div class="tempat-edit">
                <a>Input Data Buku</a>
                <form action="prosesedit.php" method="POST">
                    <input type="text" name="id_buku" value="<?php echo $id_buku ?>">
                    <input type="text" name="judul" value="<?php echo $judul ?>">
                    <input type="text" name="noisbn" value="<?php echo $noisbn ?>">
                    <input type="text" name="penulis" value="<?php echo $penulis ?>">
                    <input type="text" name="tahun" value="<?php echo $tahun ?>">
                    <input type="text" name="stok" value="<?php echo $stok ?>">
                    <input type="text" name="harga_pokok" value="<?php echo $harga_pokok ?>">
                    <input type="text" name="harga_jual" value="<?php echo $harga_jual ?>">
                    <input type="text" name="ppn" value="<?php echo $ppn ?>">
                    <input type="text" name="diskon" value="<?php echo $diskon ?>">
                    <button type="submit">Submit<i style="padding-left: 10px;" class="fa fa-send"></i></button> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>