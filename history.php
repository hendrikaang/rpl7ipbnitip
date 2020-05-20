<?php
require_once("auth.php");

$userID = $_SESSION['masuk'];

// ambil custID
$ambilcustomer = pg_query($db, "SELECT * FROM customer WHERE userID=$userID");
$datacustomer = pg_fetch_assoc($ambilcustomer);
$custID = $datacustomer['custid'];

// ambil tagihan
$ambiltagihan = pg_query($db, "SELECT * FROM tagihan WHERE custID=$custID;");

?>

<!DOCTYPE html>
<html>
<head>
    <title>History</title>
    <link rel="stylesheet" href="history.css">  
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
<h1>HISTORY PESANAN</h1>
<div class="shopping-history">  
    <div class="column-labels">
        <label class="id-tagihan">No Tagihan</label>
        <label class="product-price">Total Harga</label>
        <label class="product-status">Status</label>
    </div>

    <? while($datatagihan = pg_fetch_assoc($ambiltagihan)){
        $tagihanID = $datatagihan['tagihanid'];
        $total = $datatagihan['total'];
        $status = $datatagihan['status'];
        ?>
    <div class="product">
        <div class="id-tagihan"><?echo("$tagihanID")?></div>
        <div class="product-price"><?echo("$total")?></div>
        <div class="product-status">
            <?if($status==1){
                echo("Selesai");
            } else {
                echo"<a href='pesananditerima.php?idtagihan=$tagihanID'>Telah diterima?</a>";
            }
            ?>
        </div>
    </div>
    <?}?>
    </div>

</div>
</body>
</html>