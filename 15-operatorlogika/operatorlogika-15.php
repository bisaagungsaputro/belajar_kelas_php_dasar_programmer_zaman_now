<?php


// Hasil true - Karena Keduanya true
echo "and \n";
var_dump(true && true);

// Hasil false - Karena Salah Satunya false
var_dump(true && false);

echo "\n";

// Hasil true - Karena Salah Satunya true
echo "or \n";
var_dump(true || true);

// Hasil true - Karena Salah Satunya true
var_dump(true || false);

echo "\n";

// Hasil false - Karena Datanya true
echo "not \n";
var_dump(!true);

// Hasil true - Karena Datanya false
var_dump(!false);

echo "\n";

// Hasil false - Karena Keduanya true
echo "xor \n";
var_dump (true xor true);

// Hasil true - Karena Salah Satunya true
var_dump (true xor false);


// ---


// *** Operator Logika ***


// *** Operator Logika ***
// *** Operator Logika (1) ***
// *** Kode : Operator Logika ***


// *** Operator Logika ***
/*
        Operator Logika
        - Operator Logika Adalah Operator Untuk Membandingkan Dua Nilai Boolean
        - Hasil Dari Operator Logika Adalah Boolean Lagi
*/

// *** Operator Logika (1) ***
/*
    Operator Logika (1)
    Operator                                                                                    Nama            Hasil
    $a && $b (Rekomendasi Daripada Dibawah Karena Lebih Familiar Semua Bahaha Pemprograman)     And             true Jika $a Dan $b Keduanya true
    $a and $b                                                                                   And             true Jika $a Dan $b Keduanya true
    $a || $b (Rekomendasi Daripada Dibawah Karena Lebih Familiar Semua Bahaha Pemprograman)     Or              true Jika $a Dan $b Salah Satu Atau Keduanya true
    $a or $b                                                                                    Or              true Jika $a Dan $b Salah Satu Atau Keduanya true
    ! $a                                                                                        Not             true Jika $a Bernilai false
    $a xor $b                                                                                   Xor             true Jika $a Dan $b Salah Satu true, Tapi Tidak Keduanya
*/

// *** Kode : Operator Logika ***
/*
    Kode : Operator Logika
    var_dump(true && true);
    var_dump(true && false);

    var_dump(true || true);
    var_dump(true || false);

    var_dump(!true);

    var_dump (true xor true);
    var_dump (true xor false);
*/



?>