<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos impedit eum nulla optio.";

// Tampilkan teks asli
echo "<p>{$loremIpsum}</p>";

// Hitung panjang karakter
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";

// Hitung panjang kata
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

// Tampilkan teks dalam huruf kapital
echo "<p>" . strtoupper($loremIpsum) . "</p>";

// Tampilkan teks dalam huruf kecil
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>
