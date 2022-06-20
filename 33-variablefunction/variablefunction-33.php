<?php


// *** Kode : Variable Function ***
    function foo() {
        echo "FOO" . PHP_EOL;
    }

    function ba() {
        echo "BAR" . PHP_EOL;
    }

    foo();

    $functionLast = "ba";
    $functionLast();

// *** Kode : Penggunaan Variable Function ***
    function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    function sampleFunction(string $name): string {
        return "Sample $name";
    }

    sayHello("Eko", "strtolower", "sampleFunction");

    // Semua Huruf Vira Menjadi Huruf Kecil Semua vira
    sayHello("VIRA", "strtolower");

    // Semua Huruf Atika Menjadi Huruf Besar Semua ATIKA
    sayHello("Atika", "strtoupper");

    function sayGoodBye(string $last, $filter) {
        $coba = $filter($last);
        echo "Hello $coba" . PHP_EOL;
    }

    sayGoodBye("Eko", "strtolower");


// ---


// *** Variable Function ***


// *** Variable Function ***
// *** Kode : Variable Function ***
// *** Kode : Penggunaan Variable Function ***



// *** Variable Function ***
/*
    Variable Function
    - PHP Mendukung Konsep Yang Bernama Variable function
    - Variable function Adalah Kemampuan Memanggil Sebuah function Dari Value Yang Terdapat Di Sebuah Variable
    - Untuk Menggunakan Variable function, Kita Bisa Secara Langsung Memanggil $namaVariable(),
      Jika Ingin Menambahkan Argument, Kita Bisa Menggunakan $namaVariable(Argument)
*/

// *** Kode : Variable Function ***
/*
    Kode : Variable Function
    function foo() {
        echo "FOO" . PHP_EOL;
    }

        function bar() {
        echo "BAR" . PHP_EOL;
    }

    $functionName = "foo";
    $functionName();

    $functionLast = "bar";
    $functionLast();
*/

// *** Kode : Penggunaan Variable Function ***
/*
    Kode : Penggunaan Variable Function
    function sayHello(string $name, $last) {
        $eksekusi = $name($last);
        echo "Hello $eksekusi" . PHP_EOL;
    }

    sayHello("Eko", "Kurniawan");
*/



?>