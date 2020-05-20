<?php
require_once("auth.php");

$tagihanID = $_GET['idtagihan'];

// update status tagihan
$query = pg_query($db, "UPDATE tagihan SET status=1 WHERE tagihanID=$tagihanID;");

header("Location: history.php");

?>