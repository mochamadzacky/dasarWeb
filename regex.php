<!DOCTYPE html>
<html>
<head>
    <title>Regex Example with {n,m}</title>
</head>
<body>
    <?php
    // Contoh Pencarian String dengan Regex menggunakan '{n,m}'
    echo "<h3>Contoh 5: Pencarian String dengan Regex 'o{1,2}'</h3>";
    
    // Pattern dengan '{n,m}' untuk mencocokkan karakter 'o' yang muncul 1 hingga 2 kali
    $pattern = '/go{1,2}d/'; // 'o' bisa muncul 1 atau 2 kali
    $text = 'god is good.';
    
    // Preg match untuk mencocokkan pola dengan simbol '{n,m}'
    if (preg_match($pattern, $text, $matches)) {
        echo "<p>Cocokan: " . $matches[0] . "</p>";
    } else {
        echo "<p>Tidak ada yang cocok!</p>";
    }
    ?>
</body>
</html>
