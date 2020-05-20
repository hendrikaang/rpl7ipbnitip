<?php
require_once("config.php");

// ambil topupID
$topupID = $_GET['topupid'];

// ambil userID
$userID = $_GET['userid'];

// ambil nominal
$nominal = $_GET['nominal'];

// ambil saldo terakhir
$query1 = pg_query($db, "SELECT * FROM nitiperz WHERE userID=$userID;");
$dataQuery1 = pg_fetch_assoc($query1);
$saldolama = $dataQuery1['saldo'];

//menambah saldo
$saldobaru = $saldolama + $nominal;
$query2 = pg_query($db, "UPDATE nitiperz SET saldo=$saldobaru WHERE userID=$userID;");

if($query2){
    // ubah status topup
    $query3 = pg_query($db, "UPDATE topup SET status=1 WHERE topupID=$topupID");
    header("Location: UPDATEtambahsaldouserqazwsxedc.php");
} else {
    echo("tambah saldo gagal dilakukan");
}

?>