<?php
// input bilangan
$bilangan1 = 10;
$bilangan2 = 5;


// fungsi penjumlahan
function penjumlahan($bilangan1, $bilangan2)
{
    // perhitungan penjumlahan kedua bilangan
    print "Hasil Penjumlahan adalah = " . ($bilangan1 + $bilangan2) . "<br>";
}

// fungsi pengurangan
function pengurangan($bilangan1, $bilangan2)
{
    // perhitungan pengurangan kedua bilangan
    print "Hasil Pengurangan adalah = " . ($bilangan1 - $bilangan2) . "<br>";
}

// fungsi perkalian
function perkalian($bilangan1, $bilangan2)
{
    // perhitungan perkalian kedua bilangan
    print "Hasil Perkalian adalah = " . ($bilangan1 * $bilangan2) . "<br>";
}

// fungsi pembagian
function pembagian($bilangan1, $bilangan2)
{
    // perhitungan pembagian kedua bilangan
    print "Hasil Pembagian adalah = " . ($bilangan1 / $bilangan2) . "<br>";
}

// fungsi hitung untuk menyimpan dan memanggil fungsi semua perhitungan
function hitung($bilangan1, $bilangan2)
{
    print "Bilangan 1 = " . $bilangan1 . "<br>";
    print "Bilangan 2 = " . $bilangan2 . "<br>";
    print "==================================== <br>";

    //panggil fungsi 
    penjumlahan($bilangan1, $bilangan2);
    pengurangan($bilangan1, $bilangan2);
    perkalian($bilangan1, $bilangan2);
    pembagian($bilangan1, $bilangan2);
}

// pemanggilan fungsi untuk kedua bilangan yang diinput
hitung($bilangan1, $bilangan2);
