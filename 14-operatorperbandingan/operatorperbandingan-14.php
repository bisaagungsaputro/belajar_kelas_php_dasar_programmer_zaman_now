<?php


// *** Kode : Operator Perbandingan ***

// Hasil true - Karena Value Sama
echo "Sama Dengan \n";
var_dump("10" == 10);
echo "\n";
// Hasil false - Karena Berbeda Tipe Datanya
echo "Identik \n";
var_dump("10" === "10");

echo "\n";

// Hasil false - Karena 10 Lebih Besar Dari 9 (Bukan 10 Lebih Kecil Dari 9)
echo "Lebih Kecil \n";
var_dump(10 < 9);
echo "\n";
// Hasil true - Karena 10 Lebih Dari Sama Dengan 10
echo "Lebih Dari Sama Dengan \n";
var_dump(10 >= 10);

echo "\n";

// Hasil false - Karena Sama Value
echo "Tidak Sama Dengan \n";
var_dump(10 != "10");
echo "\n";
// Hasil true - Karena Tipe Data Dan Value Berbeda
var_dump(10 != "Coba");
echo "\n";
// hasil false - Karena Sama Tipe Data & Value
var_dump(10 != 10);

echo "\n";

// Hasil true - Karena Tidak Sama Tipe Data
echo "Tidak Identik \n";
var_dump(10 !== "10");
echo "\n";
// Hasil true - Karena Tidak Sama Tipe Data & Value
var_dump(10 !== "Coba");
echo "\n";
// Hasil false - Karena Tipe Data & Value Sama
var_dump(10 !== 10);


// ---


// *** Operator Perbandingan ***


// *** Operator Perbandingan ***
// *** Operator Perbandingan (1) ***
// *** Operator Perbandingan (2) ***
// *** Kode : Operator Perbandingan ***


// *** Operator Perbandingan ***
/*
    Operator Perbandingan
    - Operator Perbandingan, Seperti Namanya, Digunakan Untuk Membandingkan Dua Buah Value
    - Hasil Dari Operator Perbandingan Adalah Boolean, true Jika Perbandingannya Benar, false Jika Perbandingannya Salah

    => Tidak Cuma Untuk Number Untuk Membandingkan Dua Buah Value, Bisa Juga Untuk Tipe Data Lain Seperti String, Boolean DLL
*/

// *** Operator Perbandingan (1) ***
/*
    Operator Perbandingan (1)
    Operator                                                                Nama                            Keterangan
    $a == $b                                                                Sama Dengan                     true Jika $a Sama Dengan $b Setelah Dilakukan Konversi Tipe Data
    $a === $b                                                               Identik                         true Jika $a Sama Dengan $b Dan Memiliki Tipe Data Yang Sama
    $a != $b => Lebih Umum Digunakan Ketimbang Yang Dibawah $a <> $b        Tidak Sama Dengan               true Jika $a Tidak Sama Dengan $b Setelah Dilakukan Konversi Tipe Data
    $a <> $b                                                                Tidak Sama Dengan               true Jika $a Tidak Sama Dengan $b Setelah Dilakukan Konversi Tipe Data
*/

// *** Operator Perbandingan (2) ***
/*
    Operator Perbandingan (2)
    Operator                                    Nama                                        Keterangan
    $a !== $b                                   Tidak Identik                               true Jika $a Tidak Sama Dengan $b Atau Tidak Sama Tipe Data
    $a < $b                                     Kurang Dari                                 true Jika $a Kurang Dari $b
    $a <= $b                                    Kurang Dari Atau Sama Dengan                true Jika $a Kurang Dari Atau Sama Dengan $b
    $a > $b                                     Lebih Dari                                  true Jika $a Lebih Dari $b
    $a >= $b                                    Lebih Dari Atau Sama Dengan                 true Jika $a Lebih Dari Atau Sama Dengan $b
*/

// *** Kode : Operator Perbandingan ***
/*
    Kode : Operator Perbandingan
    var_dump("10" == 10);
    var_dump("10" === 10);

    var_dump(10 > 9);
    var_dump(10 >= 10);

    var_dump(10 != "10");
    var_dump(10 != "Coba");
    var_dump(10 != 10);

    var_dump(10 !== "10");
    var_dump(10 !== "Coba");
    var_dump(10 !== 10);
*/



?>