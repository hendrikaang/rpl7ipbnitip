<?php

require_once("config.php");

if(isset($_POST['login'])){
    // input
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $user = pg_query("SELECT * FROM nitiperz WHERE nama='$nama' AND password='$password'");

    // jika user terdaftar dan password cocok
    if($user){
        $data = pg_fetch_assoc($user);
        session_start();
        $_SESSION["masuk"] = $data[userid];
        // login sukses, alihkan ke halaman timeline
        header("Location: nitip.php");
    }

}
?>