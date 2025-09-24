<?php
echo "<h2>1. Login User</h2>";
$username = "admin";
$password = "12345";

$input_user = "admin";
$input_pass = "12345";

if ($input_user == $username && $input_pass == $password) {
    echo "Login berhasil!<br><br>";
} else {
    echo "Login gagal. Username atau password salah.<br><br>";
}

// --------------------------------------

echo "<h2>2. Validasi Usia</h2>";
$usia = 17;

if ($usia >= 18) {
    echo "Kamu sudah cukup umur untuk mendaftar.<br><br>";
} elseif ($usia >= 13) {
    echo "Kamu boleh mendaftar dengan izin orang tua.<br><br>";
} else {
    echo "Kamu belum cukup umur untuk mendaftar.<br><br>";
}

// --------------------------------------

echo "<h2>3. Cek Diskon Pembelian</h2>";
$total_belanja = 150000;

if ($total_belanja >= 100000) {
    echo "Kamu mendapat diskon 10%!<br><br>";
} else {
    echo "Belanja lebih banyak untuk mendapatkan diskon.<br><br>";
}

// --------------------------------------

echo "<h2>4. Menentukan Grade Nilai</h2>";
$nilai = 82;

if ($nilai >= 90) {
    echo "Grade: A<br><br>";
} elseif ($nilai >= 80) {
    echo "Grade: B<br><br>";
} elseif ($nilai >= 70) {
    echo "Grade: C<br><br>";
} elseif ($nilai >= 60) {
    echo "Grade: D<br><br>";
} else {
    echo "Grade: E (Tidak Lulus)<br><br>";
}

// --------------------------------------

echo "<h2>5. Cek Hari</h2>";
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini kerja keras!<br><br>";
        break;
    case "Jumat":
        echo "Hari ini hampir weekend!<br><br>";
        break;
    case "Minggu":
        echo "Hari ini libur!<br><br>";
        break;
    default:
        echo "Hari biasa.<br><br>";
}
?>
