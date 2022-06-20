<?php

// Menaikkan 1 Angka
$a = 10;
$b = 10;
// $a = $a + 1; => 10 + 1 = 11
$a++;
// $a = $a + 1; => 11 + 1  = 12
$a++;
// Hasil => 12
echo "Increment";
var_dump($a);

/*
    $d = $d + 1; => 10 + 1 = 11
    $e = $d; => 11
    Hasil => 11
*/
$c = ++$b;
echo "Increment";
var_dump($c);


    // Menurunkan 1 Angka
    $x = 10;
    $z = --$x;
    // $a = $x - 1; => 10 - 1 = 9
    echo "Decrement";
    var_dump($z);

// ---

// *** Increment Dan Decrement ***

// *** Increment Dan Decrement ***
// *** Operator Increment Dan Decrement ***
// *** Kode : Operator Increment Dan Decrement ***

// *** Increment Dan Decrement ***
/*
    Increment Dan Decrement
    - PHP Mendukung Gaya Bahasa Pemprograman C Untuk Menaikkan Dan Menurunkan Data Number Sejumlah 1 Angka
    - Ini Bisa Mempersingkat Kita Ketika Ingin Menaikkkan Data
*/

// *** Operator Increment Dan Decrement ***
/*
    Operator Increment Dan Decrement
    Contoh                  Name                    Efek
    $a++                    Post Increment          Kembalikan $a, Lalu Naikkan 1 Angka
    ++$a                    Pre Increment           Naikkan $a Satu Angka, Lalu Kembalikan $a
    $a--                    Post Decrement          Kembalikan $a, Lalu Turunkan 1 Angka
    --$a                    Pre Decrement           Turunkan $a Satu Angka, Lalu Kembalikan $a
*/

// *** Kode : Operator Increment Dan Decrement ***
/*
    Kode : Operator Increment Dan Decrement
    $a = 10;
    $b = ++$a;

    var_dump($b);
    var_dump($a);
*/



?>