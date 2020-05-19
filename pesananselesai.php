<?php
require_once("auth.php");
// ambil userID
$userID = $_SESSION['masuk'];
$ambilNitiperz = pg_query($db, "SELECT * FROM nitiperz WHERE userID=$userID;");
$dataNitiperz = pg_fetch_assoc($ambilNitiperz);
$saldolama = $dataNitiperz['saldo'];

// ambil orderan
$idproduk = $_GET['idproduk'];
$banyak = $_GET['banyak'];
$harga = $_GET['harga'];
$idproduk = $_GET['idproduk'];
$idtagihan = $_GET['idtagihan'];

// ubah status
$query1 = pg_query($db, "UPDATE orderan SET status=1 
            WHERE idproduk=$idproduk AND idtagihan=$idtagihan;");

// transfer saldo
if($query1){
    $saldobaru = $saldolama+($banyak*$harga)+4000;
    $query2 = pg_query($db, "UPDATE nitiperz SET saldo=$saldobaru 
            WHERE userID=$userID;");
} else {
    echo("gagal ubah status pesanan");
}

if($query2){
    header("Location = pesananmasuk.php");
} else {
    echo("gagal transfer saldo");
}

?>