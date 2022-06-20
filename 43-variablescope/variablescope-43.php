<?php


// *** Kode : Variable Global Scope - Tidak Rekomendasikan ***
// Tidak Bisa Diakses Karena Berada Diluar Function / Global Function
    $name = "Eko";

    function sayName() {
        echo $name;
    }

    sayName();

// *** Kode : Variable Local Scope - Tidak Rekomendasikan ***
    function createName() {
        $names = "Eko";
    }

    createName();
    echo $names;

// *** Kode : Global Keyword - Rekomendasikan ***
    $name = "Eko"; // Global Scope

    function sayHello() {
        global $name; // Global Keyword
        echo "Hello $name" . PHP_EOL;
    }

    sayHello();

// *** Kode : $GLOBAL Variable ***
    $kota = "Jakarta Timur";

    function tinggal() {
        echo "Saya Tinggal Di Kota {$GLOBALS["kota"]}" . PHP_EOL;
    }

    tinggal();

// *** Kode : Static Scope ***
function increment()
{
    // Siklus Hidupnya Terus Menerus
    static $counter = 1; // Static Scope , Ketika Memanggil Maka Menjadi 1, Jika Memanggil Lagi Menjadi 2 Dan Seterusnya

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();
increment();


//  ---


// *** Variable Scope ***


// *** Variable Scope ***
// *** Global Scope - Tidak Rekomendasikan ***
// *** Kode : Variable Global Scope - Tidak Rekomendasikan ***
// *** Local Scope - Tidak Rekomendasikan ***
// *** Kode : Variable Local Scope - Tidak Rekomendasikan ***
// *** Global Keyword - Rekomendasikan ***
// *** Kode : Global Keyword - Rekomendasikan ***
// *** $GLOBAL Variable ***
// *** Kode : $GLOBAL Variable ***
// *** Static Scope ***
// *** Kode : Static Scope ***


// *** Variable Scope ***
/*
    Variable Scope
    - Di PHP, Kita Bisa Membuat Variable Dimanapun Yang Kita Mau
    - Variable Scope Adalah Dibagian Mana Saja Sebuah Variable Bisa Diakses

    - PHP Memiliki Tiga Jenis Variable Scope
      1. Global
      2. Local
      3. Static
*/

// *** Global Scope - Tidak Rekomendasikan ***
/*
    Global Scope
    - Variable Yang Dibuat Diluar function Memiliki Scope Global
    - Variable Scope Global Hanya Bisa Diakses Dari luar function
    - Artinya Di Dalam function, Kita Tidak Bisa Mengakses Variable Di Global Scope
*/

// *** Kode : Variable Global Scope - Tidak Rekomendasikan ***
/*
    Kode : Variable Global Scope
    $name = "Eko";

    function sayName() {
        echo $name;
    }

    sayName();
*/

// *** Local Scope - Tidak Rekomendasikan ***
/*
    Local Scope
    - Variable Yang Dibuat Di Dalam function Memiliki Scope Local
    - Variable Scope Local Hanya Bisa Diakses Dari Dalam function Itu Sendiri
    - Artinya Variable Tersebut Tidak Bisa Mengakses Dari Luar function Ataupun Dari function Lain
*/

// *** Kode : Variable Local Scope - Tidak Rekomendasikan ***
/*
    Kode : Variable Local Scope
    function createName() {
        $names = "Eko";
    }

    createName();
    echo $name;
*/

// *** Global Keyword - Rekomendasikan ***
/*
    Global Keyword
    - Namun Jika Kita Ingin Mengakses Variable Diluar function (Global Scope) Dari Dalam function,
      Kita Bisa Menggunakan Kata Kunci Global
    - Dengan Menggunakan Kata Kunci Global, Maka Kita Bisa Mengakses Variable
      Yang Ada Di Global Scope Dari Dalam function
*/

// *** Kode : Global Keyword - Rekomendasikan ***
/*
    Kode : Global Keyword
    $name = "Eko"; // Global Scope

    function sayHello() {
        global $name; // Global Keyword
        echo "Hello $name" . PHP_EOL;
    }

    sayHello();
*/

// *** $GLOBAL Variable ***
/*
    $GLOBAL Variable
    - Selain Menggunakan Global Keyword, Setiap Variable Yang Dibuat Di Global Scope, Secara Otomatis
      Akan Disimpan Di Dalam array $GLOBAL Oleh PHP
    - Jadi Kita Bisa Menggunakan $GLOBAL Variable Dengan Key Nama Variable Nya Dari Dalam function
      Jika Ingin Mengakses Global Variable
    - $GLOBAL Adalah Variable Yang Bersifat SuperGlobal, Artinya Bisa Diakses Dari Scope Manapun
*/

// *** Kode : $GLOBAL Variable ***
/*
    Kode : $GLOBAL Variable
    $kota = "Jakarta Timur";

    function tinggal() {
        echo $GLOBALS["kota"] . PHP_EOL;
    }

    tinggal();
*/

// *** Static Scope ***
/*
    Static Scope
    - Secara Default, Local Variable Itu Siklus Hidupnya Hanya Sebatas function Nya Dieksekusi
    - Jika Sebuah function Selesai Dieksekusi, Maka Siklus Hidup Local Variablenya Selesai
    - PHP Memiliki Scope Bernama Static
    - Static Scope Hanya Bisa Di Set Ke Local Variable
    - Saat Kita Membuat Sebuah Local Variable Menjadi Static, Maka Siklus Hidupnya Tidak Akan Berhenti
      Ketika Sebuah function Selesai Dieksekusi
    - Artinya Jika function Tersebut Dieksekusi Lagi, Maka Static Variable Tersebut Akan Memiliki Value
      Dari Sebelumnya
*/

// *** Kode : Static Scope ***
/*
    Kode : Static Scope
    function increment() {
        static $counter = 1;

        echo "Counter : $counter" . PHP_EOL;

        $counter++;
    }

    increment();
    increment();
    increment();
*/



?>