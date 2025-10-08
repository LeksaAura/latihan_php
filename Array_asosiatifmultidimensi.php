<?php
$perumahan = [
    ["nama" => "Kharisma Regency", "harga" => 450000000, "unit" => 8],
    ["nama" => "Royal Residence", "harga" => 600000000, "unit" => 5],
    ["nama" => "Graha Pelita Regency", "harga" => 350000000, "unit" => 10],
];

// Menampilkan semua data perumahan
foreach ($perumahan as $p) {
    echo "Nama Perumahan: " . $p["nama"] . 
         " | Harga: Rp" . number_format($p["harga"], 0, ',', '.') . 
         " | Unit Tersedia: " . $p["unit"] . "<br>";
}
?>
