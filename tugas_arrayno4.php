<?php
// Array 2 dimensi 3x3 berisi angka acak (1–9)
$matriks = [];
$total = 0;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
        $total += $matriks[$i][$j];
    }
}

// Cetak dalam bentuk matriks
echo "<b>Matriks 3x3:</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>Total semua elemen: " . $total;
?>