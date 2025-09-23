<?php
$hasil1 = false and true;
echo '$hasil1 = ';
echo var_dump($hasil1)."<br/>"; // $hasil1 = bool(false)

$hasil2 = (false and true);
echo '$hasil2 = ';
echo var_dump($hasil2)."<br/>"; // $hasil2 = bool(false)

$hasil3 = (false xor true);
echo '$hasil3 = ';
echo var_dump($hasil3)."<br/>"; // $hasil3 = bool(true)

$hasil4 = (true or false && true);
echo '$hasil4 = ';
echo var_dump($hasil4)."<br/>"; // $hasil4 = bool(true)

$a = false;
$b = true;
$hasil5 = ($a and $b || $a or $b);
echo '$hasil5 = ';
echo var_dump($hasil5); // $hasil5 = bool(true)
?>