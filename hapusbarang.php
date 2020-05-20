<?php
require_once("auth.php");

$produkid = $_GET['produkid'];
$custID = $_GET['custid'];

$query = pg_query($db, "DELETE FROM keranjang WHERE custID=$custID AND produkID=$produkid ;");

header("Location: cart.php");
?>