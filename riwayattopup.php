<?php
require_once("auth.php");
$userID = $_SESSION['masuk'];
// ambil topup
$ambilTopup = pg_query($db, "SELECT * FROM topup WHERE userID=$userID;");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="UPDATEgg.css">
    <title>Riwayat top up</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a href="nitip.php"><img src="assets/nitip.png" class="navbar-brand" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="topup.php">TopUp</a>
          <a class="nav-item nav-link" href="">Bantuan</a>
          <a class="nav-item nav-link" href="profileuser.php">Akun Saya</a>
        </div>
      </div>
    </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Tambah saldo -->
    <br>
    <div class="shopping-cart">  
    <div class="column-labels">
        <label class="product-image">Bukti topup</label>
        <label class="product-details">Userid</label>
        <label class="product-price">Nilai topup</label>
        <label class="product-line-price">Status</label>
    </div>

    <?
    while($dataTopup = pg_fetch_assoc($ambilTopup)){
      $topupID = $dataTopup['topupid'];
      $userID = $dataTopup['userid'];
      $nominal = $dataTopup['nominal'];
      $status = $dataTopup['status'];
    ?>
    <div class="product">
        <div class="product-image">
            <img src="./assets/1.jpg">
        </div>
        <div class="product-details">
            <div class="product-title"> <?echo($userID);?> </div>
        </div>
        <div class="product-price">Rp <?echo($nominal);?></div>
        <div class="product-line-price">
          <?
          if($status == 0){
              echo("Belum diverifikasi");
          } elseif($status == 1){
              echo("Topup sukses");
          } else {
              echo("Ditolak");
          }
          ?>
        </div>
    </div>
    <?}?>

</div>
</div>
</div>
    <!-- akhir tambah saldo -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>