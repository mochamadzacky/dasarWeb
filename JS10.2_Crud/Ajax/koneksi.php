<?php 
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB1","prakwebdb");

// buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);

if (!$db1) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>