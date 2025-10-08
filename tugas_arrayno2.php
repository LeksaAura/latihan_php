<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Buah pertama adalah: " . $buah[0][0] . "<br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $total += $buah[$i][1] * $buah[$i][2];
}
echo "Total nilai semua stok buah: Rp" . number_format($total, 0, ',', '.') . "<br>";