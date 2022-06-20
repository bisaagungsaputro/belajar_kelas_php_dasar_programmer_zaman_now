<?php


// *** Kode : Assign By Reference ***
    $name = "Eko";

    // Mengubah Nama Eko Menjadi Kurniawan Menggunakan &
    $FullName = &$name;
    $FullName = "Kurniawan";

    echo $name . PHP_EOL;

// *** Kode : Pass By Reference ***
    // Dikirim Menggunakan Reference &
    function increment (int &$value) {
      $value++;
    }

    $counter = 1;
    increment ($counter);

    echo $counter . PHP_EOL;

// *** Kode : Returning References ***
    function &getValue() {
      static $value = 100;
      return $value;
    }

    $a = getValue();
    $a = 200;

    $b = getValue();
    echo $b . PHP_EOL;


//  ---


// *** Reference ***


// *** Reference ***
// *** Assign By Reference ***
// *** Kode : Assign By Reference ***
// *** Pass By Reference ***
// *** Kode : Pass By Reference ***
// *** Returning References ***
// *** Kode : Returning References ***
// *** Materi Selanjutnya ***


// *** Reference ***
/*
    Reference
    - Reference Adalah Mengakses Variable Yang Sama Dengan Nama Variable Yang Berbeda
    - Reference Di PHP Tidak Sama Dengan Reference Di Bahasa Pemprograman Seperti C/C++
      Yang Memiliki Fitur Pointer
    - Analogi Reference Itu Seperti File, Jika Variable Adalah File Dan Value Nya Adalah Isi Filenya,
      Maka Reference Adalah Membuat Shortcut (Di Windows) Atau Alias (Di Linux/Mac) Terhadap File Yang
      Sama
    - Saat Kita Mengubah Isi Value Dari Reference, Maka Secara Otomatis Value Variable Aslinya Pun Berubah
    - Untuk Membuat Reference Terhadap Variable, Kita Bisa Menggunakan Karakter &

    => Sampai Saat Ini Jarang Digunakan Menggunakan Fitur Reference / Tidak Terlalu Dibutuhkan
*/

// *** Assign By Reference ***
/*
    Assign By Reference
    - Pertama, PHP Reference Bisa Memungkinkan Kita Bisa Membuat Beberapa Variable Menuju Ke Value Yang Sama
*/

// *** Kode : Assign By Reference ***
/*
    Kode : Assign By Reference
    $name = "Eko";

    $FullName = &$name;
    $FullName = "Kurniawan";

    echo $name . PHP_EOL;
*/

// *** Pass By Reference ***
/*
    Pass By Reference
    - Selanjutnya Yang Bisa Dilakukan Di PHP Adalah Mengirim Data Ke function Dengan Reference
*/

// *** Kode : Pass By Reference ***
/*
    Kode : Pass By Reference
    function increment (int &$value) {
      $value++;
    }

    $counter = 1;
    increment ($counter);

    echo $counter . PHP_EOL;
*/

// *** Returning References ***
/*
    Returning References
    - PHP Juga Bisa Mengembalikan Reference Pada function
    - Namun Hati - Hati, Gunakan Fitur Ini Jika Memang Ada Alasannya, Karena Fitur Ini Bisa Membingungkan
*/

// *** Kode : Returning References ***
/*
    Kode : Returning References
    function &$getValue() {
      static $value = 100;
      return $value;
    }

    $a = $getValue();
    $a = 200;

    $b = $getValue();
    echo $b . PHP_EOL;
*/

// *** Materi Selanjutnya ***
/*
    Materi Selanjutnya
    1. PHP Object Oriented Programming => Hampir Semua Library Dan Framework PHP Sudah Berbasis OOP
    2. PHP Database => Belajar Tentang Database Bisa Pilih Menggunakan Mysqli Atau PostgreSQL
    3. PHP Web => Membuat Web Menggunakan PHP
    4. PHP Composer => Buildnya Framework Yang Paling Populer Di PHP Seperti Laravel, CodeIgniter
    5. PHP Unit Test => Karena Aplikasi Saat Ini Lebih Bagus Kualitasnya Kalau Di Implementasikan
       Dengan Unit Test
*/



?>