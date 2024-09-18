<?php


$totalKursi = 45;
$kursiDiTempati = 28;
$kursiKosong = $totalKursi - $kursiDiTempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi kosong = {$persentaseKosong}%<br>";
echo "<br>";
?>