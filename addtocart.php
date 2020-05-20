<?php
require_once("auth.php");

$userID= $_SESSION['masuk'];
$produkID= $_GET['produkid'];
echo("bayar woy $userID $produkID");

$ambilCustomer = pg_query($db, "SELECT * FROM customer WHERE userID=$userID");
$dataCustomer = pg_fetch_assoc($ambilCustomer);
$custID= $dataCustomer['custid'];

$query1 = pg_query($db, "SELECT * FROM keranjang WHERE custID=$custID AND produkID=$produkID");
$ada = pg_num_rows($query1);

// menambah ke keranjang
if($ada>0){ //jika barang yang sama sudah ada di keranjang
    $data = pg_fetch_assoc($query1);
    $banyak = $data['banyak'];
    $banyak++;
    $query2 = pg_query($db, "UPDATE keranjang SET banyak=$banyak WHERE custID=$custID AND produkID=$produkID;");
} else { // jika belum ada barang yang sama
    $query2 = pg_query($db, "INSERT INTO keranjang(custID, produkID, banyak) VALUES ($custID, $produkID, 1);");
}

if($query1 && $query2){
    header("Location: nitip.php");
} else {
    echo("pesanan gagal diinput");
}

?>