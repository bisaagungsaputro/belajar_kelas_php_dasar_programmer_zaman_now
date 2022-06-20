<?php


// *** Kode : Is Function ***
    $data = "Sample";
    $boolean = true;
    $number = 7;
    $pecahan = 7.7;
    $array = [1, 2, 3 ,4];
    // $callable
    $kosong = null;
    // true - Ada Data
    var_dump(is_string($data));
    // true - Ada Data
    var_dump(is_bool($boolean));
    // true - Ada Data
    var_dump(is_int($number));
    // true - Ada Data
    var_dump(is_float($pecahan));
    // true - Ada Data
    var_dump(is_array($array));
    // false
    var_dump(is_callable($kosong));
    // true - Ada Data
    var_dump(is_null($kosong));

    function testFunction(){
    }
    $functionVariable = 'testFunction';
    var_dump(is_callable($functionVariable, false, $callable_name));   // bool(true)
    // using only-one parameter
    var_dump(is_callable($functionVariable));


//  ---


// *** Is Function ***


// *** Is Function ***
// *** Contoh Is Function ***
// *** Kode : Is Function ***


// *** Is Function ***
/*
    Is Function
    - PHP Memiliki Banyak Sekali function Dengan prefix is_
    - function - function Ini Rata - Rata Digunakan Untuk Mengecek Tipe Data Dari Sebuah Data Variable
    - Link Untuk Mengetahui Secara Detail :
      https://www.php.net/manual/en/ref.var.php
*/

// *** Contoh Is Function ***
/*
    Contoh Is Function
    Function                            Keterangan
    is_string()                         Apakah Tipe Data String
    is_bool()                           Apakah Tipe Data Boolean
    is_int()                            Apakah Tipe Data Number Integer
    is_float()                          Apakah Tipe Data Number Floating Point
    is_array()                          Apakah Tipe Data array
    is_callable()                       Apakah Tipe Data callable
    is_null()                           Apakah Tipe Data null

    => Untuk Mengeceknya Menggunakan var_dump, Contohnya :
       $data ="Sample";
       var_dump(is_string($data));
    => Hasil Outputnya Berupa Boolean (true / false)
*/

// *** Kode : Is Function ***
/*
    Kode : Is Function
    $data = "Sample";

    var_dump(is_string($data));
    var_dump(is_bool($data));
    var_dump(is_int($data));
    var_dump(is_float($data));
    var_dump(is_array($data));
    var_dump(is_callable($data));
    var_dump(is_null($data));
*/



?>