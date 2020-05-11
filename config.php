<?php
$db=pg_connect('host=localhost dbname=nitip user=postgres password=SoKoR123');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
