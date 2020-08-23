<?php 
    
    include("../koneksi.php");
    session_start();

    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        header("location: http://localhost/DanZai Web UPK/");
    }
    else{

?>

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
            <a class="akun">Hi, <?php echo $_SESSION['username']; ?> Welcome Back</a><a class="logout" href="proseslogout.php"><i class="fa fa-sign-out"></i>Log Out</a>
            
        </header>
        <div class="isi">
            <div class="tempat-tabel">
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
                     session_start();
                     echo $_SESSION['data'] . "test";

                    $no = 1;
                    $tabel = mysql_query("SELECT * FROM buku");
                    while ($cetak=mysql_fetch_row($tabel)) {
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
                          <a class="action2" href="hapusdata.php?id=<?php echo $id_buku?>">
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
                    <input type="text" name="id_buku" placeholder="ID Buku">
                    <input type="text" name="judul" placeholder="Judul">
                    <input type="text" name="noisbn" placeholder="No ISBN">
                    <input type="text" name="penulis" placeholder="Penulis">
                    <input type="text" name="tahun" placeholder="Tahun">
                    <input type="text" name="stok" placeholder="Stok">
                    <input type="text" name="harga_pokok" placeholder="Harga Pokok">
                    <input type="text" name="harga_jual" placeholder="Harga Jual">
                    <input type="text" name="ppn" placeholder="PPN">
                    <input type="text" name="diskon" placeholder="Diskon">
                    <button type="submit">Submit<i style="padding-left: 10px;" class="fa fa-send"></i></button> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php
    }
?>