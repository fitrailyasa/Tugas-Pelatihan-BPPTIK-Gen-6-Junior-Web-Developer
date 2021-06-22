<?php

// Program Kalkulator Sederhana
// Fitra Ilyasa

// Deklarasi Variabel bilangan
$bil1 = 9; 
$bil2 = 3;

// Menampilkan bilangan 1 dan 2
echo "bilangan 1 : $bil1 <br>";
echo "bilangan 2 : $bil2 <br>";
echo "========================= <br>";


// Fungsi Operator
function penjumlahan($bil1, $bil2) {
	$tambah = $bil1 + $bil2;
	echo "hasil penjumlahan adalah : $tambah <br>";
}
function pengurangan($bil1, $bil2) {
	$kurang = $bil1 - $bil2;
	echo "hasil pengurangan adalah : $kurang <br>";
}
function perkalian($bil1, $bil2) {
	$kali = $bil1 * $bil2;
	echo "hasil perkalian adalah : $kali <br>";
}
function pembagian($bil1, $bil2) {
	$bagi = $bil1 / $bil2;
	echo "hasil pembagian adalah : $bagi <br>";
}

// Menampilkan Fungsi
penjumlahan($bil1, $bil2);
pengurangan($bil1, $bil2);
perkalian($bil1, $bil2);
pembagian($bil1, $bil2);
	
?>