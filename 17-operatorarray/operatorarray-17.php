<?php

// Array 1
echo "Union \n";
$first = [
    "first_name" => "Eko"
];

// Array 2
$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

// first_name => Yang Lebih Awal Di Utamakan Sehingga ($last = "fist_name" => Tidak dipanggil)
// Menggabungkan Array 1 dan Array 2
$full = $first + $last;
var_dump($full);

echo "\n";


// Array 1
$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

// Array 2
$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];

// Memiliki Key Dan Value Sama - Walaupun Beda Posisi
echo "Equality \n";
$equality = $a == $b;
var_dump($equality);
// Memiliki Key Dan Value Sama Dan Posisi Sama
echo "Identity \n";
var_dump($a === $b);

// Tidak Sama
echo "Inequality \n";
var_dump($a != $b);

// Tidak Identik
echo "Nonidentity \n";
var_dump($a !== $b);


// ---


// *** Operator Array ***


// *** Operator Array ***
// *** Operator Array (1) ***
// *** Kode : Operator Array (2) ***
// *** Kode : Operator Array (3) ***


// *** Operator Array ***
/*
    Operator Array
    - Di PHP, Array Memiliki Operator Khusus
    - Mungkin Terlihat Mirip Dengan Operator - Operator Sebelumnya, Tapi Cara Kerjanya Sedikit Berbeda
*/

// *** Operator Array (1) ***
/*
    Operator Array (1)  
    Contoh                                                                                      Nama                Keterangan
    $a + $b                                                                                     Union               Menggabungkan Array $a Dan $b
    $a == $b                                                                                    Equality            true Jika $a Dan $b Memiliki Key Dan Value Sama
    $a === $b                                                                                   Identity            true Jika $a Dan $b Memiliki Key Dan Value Sama Dan Posisi Sama
    $a != $b (Rekomendasi Daripada Dibawah Karena Lebih Familiar Semua Bahasa Pemprograman)     Inequality          true Jika $a Dan $b Tidak Sama
    $a <> $b                                                                                    Inequality          true Jika $a Dan $b Tidak Sama
    $a !== $b                                                                                   Nonidentity         true Jika $a Dan $b Tidak Identik
*/

// *** Kode : Operator Array (2) ***
/*
    Kode : Operator Array (2)
    $first = [
        "first_name" => "Eko"
    ];

    $last = [
        "last_name" => "Khannedy"
    ];

    var_dump($fist + $last);
*/

// *** Kode : Operator Array (3) ***
/*
    Kode : Operator Array (3)
    $a = [
        "fist_name" => "Atika",
        "last_name" => "Nur Aini"
    ];

    $b = [
        "last_name" => "Agistasari",
        "fist_name" => "Vira"
    ];

    var_dump($a == $b);
    var_dump($a === $b);
*/


?>