<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);



$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3; // Added the dollar sign $

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3; // Added dollar signs for variables

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);


$apakahSiswaLulus = true;
$apakahSiswaSydahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSydahUjian);


$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

// Using interpolation with curly braces
$namaLengkap = "{$namaDepan} {$namaBelakang}";

// Using concatenation, added a space between the two variables
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang; // Added a space between the single quotes

// Corrected the echo statement for "Nama Belakang"
echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>"; // Fixed the quotes

// Output full name
echo $namaLengkap;


$listMahasiswa = ["Wahid Abdulloh", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];

?>
