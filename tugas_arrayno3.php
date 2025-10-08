<?php
$produk = [
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 3500000, "rating" => 4.6],
    ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 750000, "rating" => 4.3],
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 6500000, "rating" => 4.8]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "Produk dengan harga tertinggi adalah: " . $tertinggi["nama"] . 
     " (Rp" . number_format($tertinggi["harga"], 0, ',', '.') . ")<br>";
?>
