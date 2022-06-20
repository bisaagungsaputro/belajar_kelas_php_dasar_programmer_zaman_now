<?php


// Total Dibeli 0
$total = 0;

// Harga Buah
$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;

/* 
    Cara 1 - Cara Cepat
    Total Yang Dibeli
    0 + 5000 = 5000
    5000 + 10000 = 15000
    15000 + 5000 = 20000
    Jumlah Total = 20000
*/
$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

/*
    Cara 2 - Cara Lama
    $total = $total + $fruit;
    $total = $total + $chicken;
    $total = $total + $orangeJuice;
*/

var_dump($total);


// ---


// *** Operator Penugasan ***


// *** Operator Penugasan ***
// *** Operator Penugasan Aritmatika ***
// *** Kode : Operator Penugasan Aritmatika ***


// *** Operator Penugasan ***
/*
    Operator Penugasan
    - Operator Penugasan Di PHP Sama Seperti Bahasa Pemprograman Lain, Yaitu Dengan Menggunakan Karakter = (Sama Dengan)
    - Operator Penugasan Sudah Sering Kita Gunakan, Terutama Ketika Mengubah Value Sebuah Variable
    - Namun Selain Hal Itu, Operasi Penugasan Juga Bisa Digunakan Untuk Operasi Aritmatika
*/

// *** Operator Penugasan Aritmatika ***
/*
    Operasi Penugasan Aritmatika
    Penugasan                                               Keterangan
    $a += $b                                                $a = $a + $b
    $a -= $b                                                $a = $a - $b
    $a *= $b                                                $a = $a * $b
    $a /= $b                                                $a = $a / $b
    $a %= $b                                                $a = $a % $b
*/

// *** Kode : Operator Penugasan Aritmatika ***
/*
    Kode : Operator Penugasan Aritmatika
    $total = 0;

    $fruit = 5000;
    $chicken = 10000;
    $orangeJuice = 5000;

    $total += $fruit;
    $total += $chicken;
    $total += $orangeJuice;

    var_dump($total);
*/



?>