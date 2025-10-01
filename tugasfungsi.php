<?php
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$angka1 = 100;
$angka2 = 150;
echo "1. Bilangan terbesar dari $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2) . "<br><br>";

$tanggalSekarang = getdate();
echo "2. Tanggal sekarang (getdate): " 
    . $tanggalSekarang['mday'] . "-" 
    . $tanggalSekarang['mon'] . "-" 
    . $tanggalSekarang['year'] . "<br><br>";

echo "3. Tanggal sekarang (date): " . date('d-F-Y');
?>
