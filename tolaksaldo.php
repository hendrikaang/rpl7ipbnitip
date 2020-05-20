<?php
require_once("config.php");

// ambil topupID
$topupID = $_GET['topupid'];

// ambil userID
$userID = $_GET['userid'];

// ambil nominal
$nominal = $_GET['nominal'];

// ubah status topup
$query1 = pg_query($db, "UPDATE topup SET status=5 WHERE topupID=$topupID");
    
if($query1){
    header("Location: UPDATEtambahsaldouserqazwsxedc.php");    
} else {
    echo("tolak saldo gagal dilakukan");
}

?>