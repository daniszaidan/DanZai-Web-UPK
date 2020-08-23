
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
            <a class="akun">Hi DanZai, Welcome Back</a><a class="logout" href="proseslogout.php"><i class="fa fa-sign-out"></i>Log Out</a>
            
        </header>
        <div class="isi">
            <div class="tempat-tabel">
                <a class="sub">Tampil Data Buku</a>
                <div class="tinggi">
                <table>
                    <tr class="thead">
                        <td class="no td">No</td>
                        <td class="td">ID Distributor</td>
                        <td class="td">Nama Distributor</td>
                        <td class="td">Alamat</td>
                        <td class="td">Telepon</td>
                        <td class="td">Action</td>
                    </tr>

                    <?php

                    include("../koneksi.php");

                    $no = 1;
                    $tabel = mysql_query("SELECT * FROM distributor");
                    while ($cetak=mysql_fetch_row($tabel)) {
                        $id_distributor     = $cetak[0];
                        $nama_distributor   = $cetak[1];
                        $alamat             = $cetak[2];
                        $telepon            = $cetak[3];

                    ?>
                    
                    <tr>
                        <td class="no td"><?php echo $no ?></td>
                        <td class="td"><?php echo $id_distributor ?></td>
                        <td class="td"><?php echo $nama_distributor ?></td>
                        <td class="td"><?php echo $alamat ?></td>
                        <td class="td"><?php echo $telepon ?></td>
                        <td class="act"> 
                          <a class="action1" href="editdata.php?id=<?php echo $id_distributor ?>">
                          <i class="fa fa-edit"></i></a>
                          <a class="action2" href="hapusdata.php?id=<?php echo $id_distributor ?>">
                          <i class="fa fa-remove"></i></a>
                        </td>

                        <?php $no++; } ?>

                    </tr>
                </table>
                </div>
            </div>
            <div class="tempat-cari">
                <a>Cari Data Buku</a>
                <form class="pencarian" name="pencarian" method="post" action="caridata.php">
                    <input class="search" type="text" name="cari" placeholder="Search...">
                    <button type="submit"><i class="fa fa-search"></i></button> 
                </form>
            </div>
            <div class="tempat-input">
                <a>Input Data Buku</a>
                <form action="prosesinput.php" method="POST">
                    <input type="text" name="id_distributor" placeholder="ID Distributor">
                    <input type="text" name="nama_distributor" placeholder="Nama Distributor">
                    <input type="text" name="alamat" placeholder="Alamat">
                    <input type="text" name="telepon" placeholder="Telepon">
                    <button type="submit">Submit<i style="padding-left: 10px;" class="fa fa-send"></i></button> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>