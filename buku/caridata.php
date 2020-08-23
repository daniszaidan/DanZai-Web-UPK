
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
                        <td class="td">ID Buku</td>
                        <td class="td">Judul</td>
                        <td class="td">No ISBN</td>
                        <td class="td">Penulis</td>
                        <td class="td">Tahun</td>
                        <td class="td">Stok</td>
                        <td class="td">Harga Pokok</td>
                        <td class="td">Harga Jual</td>
                        <td class="td">PPN</td>
                        <td class="td">Diskon</td>
                        <td class="td">Action</td>
                    </tr>

                    <?php

                    include("../koneksi.php");

                    $no = 1;
                    $cari = $_POST['cari'];
                    $data = mysql_query("SELECT * FROM buku where 
                        id_buku LIKE '%$cari%' OR
                        judul LIKE '%$cari%' OR
                        noisbn LIKE '%$cari%' OR
                        penulis LIKE '%$cari%' OR
                        tahun LIKE '%$cari%' OR
                        stok LIKE '%$cari%' OR
                        harga_pokok LIKE '%$cari%' OR
                        harga_jual LIKE '%$cari%' OR
                        ppn LIKE '%$cari%' OR
                        diskon LIKE '%$cari%' ");
                    while ($cetak=mysql_fetch_row($data)) {
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
                    
                    <tr>
                        <td class="no td"><?php echo $no ?></td>
                        <td class="td"><?php echo $id_buku ?></td>
                        <td class="td"><?php echo $judul ?></td>
                        <td class="td"><?php echo $noisbn ?></td>
                        <td class="td"><?php echo $penulis ?></td>
                        <td class="td"><?php echo $tahun ?></td>
                        <td class="td"><?php echo $stok ?></td>
                        <td class="td"><?php echo $harga_pokok ?></td>
                        <td class="td"><?php echo $harga_jual ?></td>
                        <td class="td"><?php echo $ppn ?></td>
                        <td class="td"><?php echo $diskon ?></td>
                        <td class="act"> 
                          <a class="action1" href="editdata.php?id=<?php echo $id_buku ?>">
                          <i class="fa fa-edit"></i></a>
                          <a class="action2" href="hapusdata.php?id=<?php echo $id_buku ?>">
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