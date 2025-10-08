<?php
// Array 2 dimensi: [Nama, Nilai Matematika, Nilai Bahasa]
$siswa = [
    ["Ragung", 85, 90],
    ["Leksa", 78, 88],
    ["Medina", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1][0] . ") adalah: " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Daftar Nilai Siswa:</b><br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         " | Matematika: " . $siswa[$i][1] . 
         " | Bahasa: " . $siswa[$i][2] . "<br>";
}
?>
