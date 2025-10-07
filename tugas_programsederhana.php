<?php
// Matriks A
$A = array(
    array(1, 1, 1),
    array(3, 3, 3),
    array(2, 2, 2)
);

// Matriks B
$B = array(
    array(2, 2, 2),
    array(3, 3, 3),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil
$C = array();

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil penjumlahan
echo "<b>Result of Matrix Addition (A + B):</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>