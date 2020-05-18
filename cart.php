<?php require_once("auth.php"); 
$id = $_SESSION['masuk'];
$query = pg_query($db, "SELECT * FROM keranjang WHERE custID=$id");
if (!$query) {
  echo "An error occurred.\n";
  exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Keranjang</title>
    <link rel="stylesheet" href="cart.css">  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
</head>
<body>

<div class="home-navbar">
    <div class="logo"><a href="nitip.php" ><img src="./assets/nitip.png"></a></div> 
       <ul>
           <li><a href=""><i class=""></i>Keranjang</a></li>
           <li><a href="#"><i class=""></i>Bantuan</a></li>
           <li><a href="profileuser.php"><i class=""></i>Akun Saya</a></li>
       </ul>  
</div>
<h1>Keranjang</h1> 
<div class="shopping-cart">  
    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>
    <?php 
        $total = 0;
        while ($row = pg_fetch_assoc($query)) {
        $produkID = $row['produkID'];
        $query2 = pg_query($db, "SELECT * FROM produk WHERE produkID = '$produkID'");
        $produk = pg_fetch_assoc($query2);
        
        ?>
    <div class="product">
        <div class="product-image">
            <img src="./assets/makanan1.jpg">
        </div>
        <div class="product-details">
            <div class="product-title"><? echo($produk['nama']);?></div>
        </div>
        <div class="product-price">
            <? echo($produk['harga']);?>
        </div>
        <div class="product-quantity">
            <? echo($row['banyak']);?>
        </div>
        <div class="product-removal">
            <button class="remove-product">Remove</button>
        </div>
        <div class="product-line-price"><? echo($row['banyak']*$produk['harga']);?></div>
    </div>
    <?$total = $total+($row['banyak']*$produk['harga']); } ?>

</div>
    <?
    if($total>0){
        $ongkir=5000;
    }else{
        $ongkir=0;
    }
    ?>
    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <div class="totals-value" id="cart-subtotal"><?echo($total);?></div>
        </div>
        <div class="totals-item">
            <label>Shipping</label>
            <div class="totals-value" id="cart-shipping"><?echo($ongkir);?></div>
        </div>
        <div class="totals-item totals-item-total">
            <label>Grand Total</label>
            <div class="totals-value" id="cart-total"><?echo($total+$ongkir);?></div>
        </div>
    </div>
    
    <button class="checkout" href="#">Checkout</button>

</div>
</div>


</body>
</html>