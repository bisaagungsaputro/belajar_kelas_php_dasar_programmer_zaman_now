<?php


// ---


// *** Expression, Statement Dan Block ***


// *** Expression ***
// *** Contoh Expression Sederhana ***
// *** Contoh Expression Complex ***
// *** Statement ***
// *** Kode : Statement ***
// *** Block ***
// *** Kode : Block ***


// *** Expression ***
/*
    Expression
    - Expression Adalah Bagian Terpenting Di PHP
    - Di PHP, Hampir Semua Kode Yang Kita Tulis Adalah Sebuah Expression
    - Secara Sederhana, Expression Adalah Apapun Yang Memiliki Nilai Atau Value

    => Saat Teman - Teman Bikin Sesuatu Dan Dia Memiliki Value Maka Kita Bilang Itu Adalah Sebuah Expression
*/

// *** Contoh Expression Sederhana ***

    // Contoh Expression Sederhana
    // - $a = 5; Ketika Kita Menulis 5, Maka Tentu Itu Adalah Nilai, Oleh Karena Itu 5 Tersebut Adalah Expression
    // - Lalu Kita Menulis Kode $b = $a; , $a Bisa Kita Bilang Adalah Expression, Karena $a Adalah Nilai 5

    $a = 5;
    $b = $a;

    echo $b . PHP_EOL;


// *** Contoh Expression Complex ***

    // Contoh Expression Complex
    // - Pada Kode Dibawah, getValue() Adalah Expression, Karena getValue() Bernilai Angka 100, Tentang Function Nanti Kita Akan Bahas Lebih Detail Di Materi Tersendiri

    function getValue(){
        return 100;
    }

    $value = getValue();
    echo $value . PHP_EOL;


// *** Statement ***
/*
    Statement
    - Statement Bisa Dibilang Adalah Kalimat Lengkap Dalam Bahasa (Dalam Belajar Bahasa Indonesia, Statement Adalah Kalimat Lengkap)
    - Sebuah Statement Berisikan Execution Komplit, Biasanya Diakhiri Dengan Titik Koma / ; (Walaupun Tidak Semua Statement Itu Diakhiri Dengan Titik Koma)
*/

// *** Kode : Statement ***

    // Kode : Statement
    // Kalimat Lengkap Disebut Statement
    $name = "Eko Kurniawan Khannedy \n";

    echo $name;

// *** Block ***
/*
    Block
    - Block Adalah Kumpulan Statement Yang Terdiri Dari NOL Atau Lebih Statement
    - Block Diawali Dan Diakhiri Dengan Kurung Kurawal {}

    => Isinya Block Itu Bisa 0 Atau 1 Statement Atau Bisa Lebih Statement
*/

// *** Kode : Block ***

    // Kode : Block
    function runApp($name){
        echo "Start Program" . PHP_EOL;
        echo "Hello $name";
        echo "End Program" . PHP_EOL;
    }
    
    $mencoba = runApp($name);

    echo $mencoba;
?>