<?php
$daftarMahasiswa = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$siswaDiAtasRerata = [];
$totalNilai = 0;

// Calculate total score
foreach ($daftarMahasiswa as $nilai) {
    $totalNilai += $nilai[1];
}

// Calculate average score
$nilaiRerata = $totalNilai / count($daftarMahasiswa); // Fixed the array name

// Find students with scores above the average
foreach ($daftarMahasiswa as $siswa) { // Fixed the array name
    if($siswa[1] > $nilaiRerata) {
        $siswaDiAtasRerata[] = $siswa[0];
    }
}

// Output the result
echo "Siswa yang mendapatkan nilai lebih dari $nilaiRerata adalah: <br>" . implode(", ", $siswaDiAtasRerata);
?>
