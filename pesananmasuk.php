<?php
require_once("auth.php");
// ambil userID
$userID = $_SESSION['masuk'];

// ambil mitraID
$ambilMitra = pg_query($db, "SELECT * FROM mitra WHERE userID=$userID;");
$dataMitra = pg_fetch_assoc($ambilMitra);
$mitraID = $dataMitra['mitraid'];

// ambil orderan
$ambilOrderan = pg_query($db, "SELECT * FROM orderan WHERE idmitra=$mitraID AND status=0;");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesanan Masuk</title>
    <link rel="stylesheet" href="pesananmasuk.css">  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
</head>
<body>

<div class="home-navbar">
    <div class="logo"><img src="./assets/nitip.png"></div> 
       <ul>
           <li><a href="cart.php"><i class=""></i>Keranjang</a></li>
           <li><a href="#"><i class=""></i>Bantuan</a></li>
           <li><a href="profileuser.php"><i class=""></i>Akun Saya</a></li>
       </ul>  
</div>
<h1>Pesanan Masuk</h1> 
<div class="pesanan">  
    <div class="column-labels">
        <label class="cost-nama">Nama Nitiperz</label>
        <label class="cost-alamat">Alamat</label>
        <label class="product-id">ID Produk</label>
        <label class="product-nama">Nama Produk</label>
        <label class="product-quantity">Jumlah</label>
        <label class="product-selesai">Selesai</label>
    </div>

    <? while($dataOrderan = pg_fetch_assoc($ambilOrderan)){
        // ambil data produk
        $idproduk = $dataOrderan['idproduk'];
        $ambilProduk = pg_query($db, "SELECT * FROM produk WHERE produkid=$idproduk;");
        $dataProduk = pg_fetch_assoc($ambilProduk);
        $namaproduk = $dataProduk['nama'];
        $harga = $dataProduk['harga'];

        // ambil data pemesan
        $idpemesan = $dataOrderan['idpemesan'];
        $ambilNitiperz = pg_query($db, "SELECT * FROM nitiperz WHERE userID=$idpemesan;");
        $dataNitiperz = pg_fetch_assoc($ambilNitiperz);
        $namapemesan = $dataNitiperz['nama'];
        $telepon = $dataNitiperz['telepon'];

        // ambil data orderan
        $alamat = $dataOrderan['alamat'];
        $banyak = $dataOrderan['banyak'];
        $idtagihan = $dataOrderan['idtagihan'];

    ?>
    <div class="list">
        <div class="cost-nama"><?echo($namapemesan);?>(<?echo($telepon);?>)</div>
        <div class="cost-alamat"><?echo($alamat);?></div>
        <div class="product-id">
            <div class="product-id"><?echo($idproduk);?></div>
        </div>
        <div class="product-nama"><?echo($namaproduk);?></div>
        <div class="product-quantity"><?echo($banyak);?></div>
        <div class="product-selesai">
            <?echo"<a class='selesai' href='pesananselesai.php?idproduk=$idproduk&banyak=$banyak&harga=$harga&idtagihan=$idtagihan' >Selesai</a>";?>
        </div>
    </div>
    <?}?>
</div>
</div>


</body>
</html>