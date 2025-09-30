<?php
$kehadiran = 75;

echo "CONTOH IF ELSE <br>";
if($kehadiran >= 80) { 
    echo "Status: Anda LULUS karena hadir >= 80% <br>";
} else { 
    echo "Status: Anda TIDAK LULUS karena kehadiran kurang dari 80% <br>";
}

echo "CONTOH SWITCH <br>";
switch($kehadiran) {
    case 100 :
        echo "Kehadiran penuh (100%) <br>";
        break;
    case 75 :
        echo "Kehadiran Anda 75% <br>";
        break;
    case 50 :
        echo "Kehadiran Anda 50% <br>";
        break;
    default :
        echo "Kehadiran tidak terdeteksi <br>";
        break;
}

echo "CONTOH FOR <br>";
for($i=1;$i<=3;$i++) {
    echo "Mahasiswa nomor urut ke-".$i." sudah dicek kehadirannya <br>";
}

echo "CONTOH WHILE <br>";
$j=1;
while($j<=3) {
    echo "Pengulangan pengecekan kehadiran ke : ".$j."<br>";
    $j++;
}
?>
