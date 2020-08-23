
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

            <div class="tempat-tabel-cari">
                <a class="sub">Tampil Data Buku</a>
                <div class="tinggi">
                <table>
                    <tr class="thead">
                        <td class="no td">No</td>
                        <td class="td">ID Pasok</td>
                        <td class="td">ID Distributor</td>
                        <td class="td">ID Buku</td>
                        <td class="td">Jumlah</td>
                        <td class="td">Tanggal</td>
                        <td class="td">Action</td>
                    </tr>

                    <?php

                    include("../koneksi.php");

                    $no = 1;
                    $cari = $_POST['cari'];
                    $data = mysql_query("SELECT * FROM pasok where 
                        id_pasok LIKE '%$cari%' OR
                        id_distributor LIKE '%$cari%' OR
                        id_buku LIKE '%$cari%' OR
                        jumlah LIKE '%$cari%' OR
                        tanggal LIKE '%$cari%' ");
                    while ($cetak=mysql_fetch_row($data)) {
                        $id_pasok         = $cetak[0];
                        $id_distributor   = $cetak[1];
                        $id_buku          = $cetak[2];
                        $jumlah           = $cetak[3];
                        $tanggal          = $cetak[4];

                    ?>
                    
                    <tr>
                        <td class="no td"><?php echo $no ?></td>
                        <td class="td"><?php echo $id_pasok ?></td>
                        <td class="td"><?php echo $id_distributor ?></td>
                        <td class="td"><?php echo $id_buku ?></td>
                        <td class="td"><?php echo $jumlah ?></td>
                        <td class="td"><?php echo $tanggal ?></td>
                        <td class="act"> 
                          <a class="action1" href="editdata.php?id=<?php echo $id_pasok ?>">
                          <i class="fa fa-edit"></i></a>
                          <a class="action2" href="hapusdata.php?id=<?php echo $id_pasok ?>">
                          <i class="fa fa-remove"></i></a>
                        </td>

                        <?php $no++; } ?>

                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>