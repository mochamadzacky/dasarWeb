<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Zacky", "Hallo");

echo "<hr>";

$saya = "Zacky";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>