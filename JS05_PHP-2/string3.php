<?php

$pesan = "Saya arek malang";

// Memecah string menjadi kata-kata
$pesanPerKata = explode(" ", $pesan);

// Membalikkan setiap kata dalam array
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);

// Menggabungkan kembali kata-kata yang telah dibalik menjadi satu kalimat
$pesan = implode(" ", $pesanPerKata);

// Menampilkan hasil
echo $pesan . "<br>";

?>
