<?php require_once("auth.php"); 

// ambil userID
$userID = $_SESSION['masuk'];

// ambil nominal
$nominal = $_POST['nominal'];

echo"id=$userID, setor Rp $nominal";
if(isset($_POST['topup'])){
    // insert tabel topup
    $query = pg_query($db, "INSERT INTO topup(userID, nominal) VALUES ($userID, $nominal);");
    header("Location = profileuser.php");
}

?>