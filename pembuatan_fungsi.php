<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(7,30);
echo "Perkalian 7 x 30 adalah $hasil";
echo "<br />";
echo "Perkalian 8 x 10 adalah ".perkalian(8,10);
?>