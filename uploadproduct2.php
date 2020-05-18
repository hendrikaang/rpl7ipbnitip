<?php

require_once("auth.php");

if(isset($_POST['upload'])){
    $id = $_SESSION['masuk'];
    $query1 = pg_query($db, "SELECT * FROM mitra WHERE userid='$id'");
    $data = pg_fetch_assoc($query1);
    $mitraID = $data['mitraid'];
    // input
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $query = pg_query($db, "INSERT INTO produk(nama, deskripsi, harga, mitraID)
                            VALUES('$nama', '$deskripsi', $harga, '$mitraID')");

    if($query){
        header("Location: uploadproduct.php");
    }else{
        echo("gagal upload");
    }

}
echo("tetew");
?>