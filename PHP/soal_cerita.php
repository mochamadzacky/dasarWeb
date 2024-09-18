<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

rsort($nilaiSiswa);
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);
$nilaiTotal = 0;

foreach ($nilaiSiswa as $nilai) {
    $nilaiTotal += $nilai;
}

if (count($nilaiSiswa) > 0) {
    echo "Total nilai dari siswa setelah mengabaikan dua nilai tertinggi dan dua terendah adalah: $nilaiTotal<br>";
    echo "Nilai rata-rata dari nilai siswa tersebut adalah: " . $nilaiTotal / count($nilaiSiswa);

} else {
    echo "Tidak ada nilai siswa yang tersisa setelah peotongan.";
}
echo "<br><br>";




$hargaProduk = 120000;
$totalHarga = $hargaProduk * 2;
$hargaSetelahDiskon = 0;

if ($totalHarga > 100000) {
    echo "Anda mendapat diskon sebesar 20%";
    $hargaSetelahDiskon = $totalHarga - (($totalHarga*20) / 100);
    echo "<br> Total belanjaan anda adalah: Rp. {$hargaSetelahDiskon}";

}
echo "<br><br>";




$totalSkor = 520;

echo "Total skor pemain adalah: $totalSkor";
echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

if ($totalSkor > 500) {
    echo "YA";
} else {
    echo "TIDAK";
}
echo "<br><br>";

?>