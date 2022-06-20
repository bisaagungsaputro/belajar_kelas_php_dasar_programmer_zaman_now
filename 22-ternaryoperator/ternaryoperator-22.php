<?php

// *** Kode : Bukan Ternary Operator ***
    $gender = "PRIA";

    $sapa = null;

    if ($gender == "PRIA") {
        $sapa = "Apa Kabar Bro?";
    }
    else {
        $sapa = "Alhamdulillah Baik Bro";
    }

    echo $sapa . PHP_EOL;

// *** Kode : Ternary Operator ***
    $baik = "BAIK";
    $adil = $baik == "BAIK" ? "Alhamdulillah Baik" : "Alhamdulillah Lagi Kurang Sehat";

    echo $adil . PHP_EOL;


// ---


// *** Ternary Operator ***


// *** Ternary Operator ***
// *** Kode : Bukan Ternary Operator ***
// *** Kode : Ternary Operator ***


// *** Ternary Operator ***
/*
    Ternary Operator
    - Kadang Ada Kasus Kita Butuh Melakukan Pengecekan Kondisi Menggunakan if Statement,
      Lalu Jika Benar Kita Ingin Memberi Nilai Terhadap Variable Dengan Nilai X Dan Jika Salah Dengan Nilai Y
    - Penggunaaan if Statement Pada Kasus Seperti Bisa Dipersingkat Menggunakan Ternary Operator
    - Ternary Operator Menggunakan Kata Kunci ? Dan :
*/

// *** Kode : Bukan Ternary Operator ***
/*
    $gender = "PRIA";

    $sapa = null;

    if ($gender == "PRIA") {
        $sapa = "Apa Kabar Bro?";
    }
    else {
        $sapa = "Baik Bro";
    }

    echo $sapa . PHP_EOL;
*/

// *** Kode : Ternary Operator ***
/*
    Kode : Ternary Operator
    $baik = "BAIK";
    $adil = $baik == "BAIK" ? "Alhamdulillah Baik" : "Alhamdulillah Lagi Kurang Sehat";

    echo $adil . PHP_EOL;
*/



?>