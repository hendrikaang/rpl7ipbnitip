<?php require_once("auth.php"); 

// ambil userID
$userID = $_SESSION['masuk'];
// ambil custID
$ambilcustomer = pg_query($db, "SELECT * FROM customer WHERE userID=$userID;");
$datacustomer = pg_fetch_assoc($ambilcustomer);
$custID = $datacustomer['custid'];

// ambil alamat
$alamat = $_POST['alamat'];

// ambil keranjang
$ambilkeranjang = pg_query($db, "SELECT * FROM keranjang WHERE custID=$custID;");

// entry tagihan
$query1 = pg_query($db, "INSERT INTO tagihan(custID, total) VALUES ($custID, 0);");

// ambil id tagihan
$ambiltagihan = pg_query($db, "SELECT * FROM tagihan WHERE custID=$custID AND total=0;");
$datatagihan = pg_fetch_assoc($ambiltagihan);
$idtagihan = $datatagihan['tagihanid'];

// entry orderan
if(isset($_POST['konfirmasi'])){
    $totalharga=0;
    while($datakeranjang = pg_fetch_assoc($ambilkeranjang)){
        $idproduk = $datakeranjang['produkid'];
        $banyak = $datakeranjang['banyak'];

        $ambilproduk = pg_query($db, "SELECT * FROM produk WHERE produkID=$idproduk;");
        $dataproduk = pg_fetch_assoc($ambilproduk);
        $idmitra = $dataproduk['mitraid'];
        $harga = $dataproduk['harga'];

        $query = pg_query($db, "INSERT INTO orderan(idpemesan, idproduk, idmitra, idtagihan, alamat, banyak) 
        VALUES ($userID, $idproduk, $idmitra, $idtagihan, '$alamat', $banyak);");

        $harga = $harga*$banyak;
        $totalharga = $totalharga+$harga;
        //delete keranjang
        $query4 = pg_query($db, "DELETE FROM keranjang WHERE custID=$custID AND produkID=$idproduk");
    }
}

// update tagihan
$totalharga = $totalharga+5000;
$query2 = pg_query($db, "UPDATE tagihan SET total=$totalharga;");

// ambil custID
$ambilnitiperz = pg_query($db, "SELECT * FROM nitiperz WHERE userID=$userID;");
$datanitiperz = pg_fetch_assoc($ambilnitiperz);

// pengurangan saldo
$saldolama = $datanitiperz['saldo'];
$saldobaru = $saldolama - $totalharga;
$query3 = pg_query($db, "UPDATE nitiperz SET saldo=$saldobaru WHERE userID=$userID;");

header("Location: nitip.php");

?>