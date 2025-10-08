<?php
// Array 3 dimensi
$perumahan = [
    [ // Blok A
        ["Rumah A1", "Tipe 36", 350000000],
        ["Rumah A2", "Tipe 45", 450000000],
        ["Rumah A3", "Tipe 54", 550000000]
    ],
    [ // Blok B
        ["Rumah B1", "Tipe 36", 360000000],
        ["Rumah B2", "Tipe 45", 460000000],
        ["Rumah B3", "Tipe 54", 560000000]
    ],
    [ // Blok C
        ["Rumah C1", "Tipe 36", 370000000],
        ["Rumah C2", "Tipe 45", 470000000],
        ["Rumah C3", "Tipe 54", 570000000]
    ]
];

// Semua data array 3 dimensi
for ($i = 0; $i < count($perumahan); $i++) {
    echo "<b>Blok " . chr(65 + $i) . "</b><br>"; // chr(65) = A, chr(66) = B, dst
    for ($j = 0; $j < count($perumahan[$i]); $j++) {
        echo "Nama: " . $perumahan[$i][$j][0] . " | ";
        echo "Tipe: " . $perumahan[$i][$j][1] . " | ";
        echo "Harga: Rp" . number_format($perumahan[$i][$j][2], 0, ',', '.') . "<br>";
    }
    echo "<br>";
}
?>
