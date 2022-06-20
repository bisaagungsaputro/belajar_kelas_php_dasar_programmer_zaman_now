<?php


// *** Kode : Dot Operator ***
$name = "Agung Saputro";

echo "Nama  : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

// *** Konversi Ke Number Dan Sebaliknya ***
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"10.11";
var_dump($valueFloat);

// *** Kode : Mengakses Karakter ***
$nama = "Eko";
echo $nama[0] . PHP_EOL;
echo $nama[1] . "\n";
echo $nama[2] . PHP_EOL;

// *** Kode : Variable Parsing ***
$kota = "Jakarta";
echo "Selamat Datang Di $kota, Semoga Liburan Anda Menyenangkan \n" . PHP_EOL;
// Tidak Perlu Bikin Seperti Ini Untuk Mengambil Variablenya, Karena Banyak Kekurangannya (Dot Operator)
echo "Selamat Datang Di " . ($kota) . " Semoga Liburan Anda Menyenangkan \n" . PHP_EOL;

// *** Kode : Curly Brace ***
$var = "variable";
echo "This Is {$var}s" . PHP_EOL;

// Gabungan Antara Variable Parsing Dengan Variable Curly Brace
echo "Selamat Datang Di ($kota)s ", "Semoga Liburan Anda Menyenangkan";


// ---


// *** Manipulasi String ***


// *** Dot Operator ***
// *** Kode : Dot Operator ***
// *** Konversi Ke Number Dan Sebaliknya ***
// *** Konversi Ke Number Dan Sebaliknya (1) ***
// *** Mengakses Karakter ***
// *** Kode : Mengakses Karakter ***
// *** Variable Parsing ***
// *** Kode : Variable Parsing ***
// *** Curly Brace ***
// *** Kode : Curly Brace ***


// *** Dot Operator ***
/*
    Dot Operator
    - Dot (Titik) Operator Adalah Operator Yang Bisa Kita Gunakan Untuk Menambahkan String Dengan Data Lain (Bisa String Atau Tipe Data Lainnya)
    - Sebenarnya Kita Bisa Menggunakan + (Plus) Untuk Menambahkan String, Namun Jika Kita Coba Tambahkan String Dengan Tipe Data Number, Maka Akan Terjadi Error,
      Oleh Karena Itu Direkomendasikan Menggunakan . (Dot) Untuk Menambahkan String Dengan Data Lain
*/

// *** Kode : Dot Operator ***
/*
  Kode : Dot Operator
  $name = "Eko Kurniawan";

  echo "Nama : " . $name . PHP_EOL;
  echo "Nilai : " . 100 . "\n";

  => PHP_EOL => Constant Untuk Enter
*/

// *** Konversi Ke Number Dan Sebaliknya ***
/*
  Konversi Ke Number Dan Sebaliknya
  - Kadang Kita Sering Melakukan Konversi Tipe Data Dari String Ke Number (int / float) Atau Sebaliknya
  - Di PHP Untuk Melakukan Konversi Cukup Mudah, Kita Hanya Perlu Menggunakan Tanda Kurung (Tipe Data)
  - Tipe Data Untuk String Adalah String, Untuk Number Bisa Menggunakan int Untuk Integer Dan float Untuk Floating Point

  => Kalau Datanya Tidak Valid, Dia Otomatis Menjadi 0
*/

// *** Konversi Ke Number Dan Sebaliknya (1) ***
/*
  Konversi Ke Number Dan Sebaliknya
  $valueString = (string)100;
  var_dump($valueString);

  $valueInt = (int)"100";
  var_dump($valueInt);

  $valueFloat = (float)"10.11";
  var_dump($valueFloat);
*/

// *** Mengakses Karakter ***
/*
  Mengakses Karakter
  - String Di PHP Seperti Array Karakter, Dimana Kita Bisa Mengakses Data Tiap Karakternya Menggunakan Kurung Siku
  - Sama Seperti Di Array, Index Pertama Dimulai Dari 0
  - Jika Kita Mengakses Index Melebihi Karakter Di String, Maka Akan Terjadi Error
*/

// *** Kode : Mengakses Karakter ***
/*
  Kode : Mengakses Karakter
  $nama = "Eko";
  echo $nama[0] . PHP_EOL;
  echo $nama[1] . "\n";
  echo $nama[2] . PHP_EOL;
*/

// *** Variable Parsing ***
/*
  Variable Parsing
  - Khusus String Menggunakan Double Quote Atau Heredoc, Kita Bisa Menggunakan Karakter $ Untuk Mengakses Variable
  - Ini Memudahkan Ketika Kita Ingin Menggabungkan String Dengan Variable
  - Cara Penggunaanya Adalah Dengan Menggunakan Karakter $ Lalu Diikuti Dengan Nama Variable Nya
*/

// *** Kode : Variable Parsing ***
/*
  Kode : Variable Parsing
  $kota = "Jakarta";
  echo "Selamat Datang Di $kota, Semoga Liburan Anda Menyenangkan" . PHP_EOL;
*/

// *** Curly Brace ***
/*
  Curly Brace
  - Kadang Kita Butuh Menggabungkan Variable Dengan String Tanpa Ada Spasi, Hal Ini Akan Menyulitkan Jika Hanya Menggunakan Variable Parsing
  - Untungnya Di PHP Kita Bisa Menambahkan Kurung Kurawal {} Sebelum Menggunakan Variable Parsing
*/

// *** Kode : Curly Brace ***
/*
  Kode : Curly Brace
  $var = "var";
  echo "This Is {$var}s" . PHP_EOL;
*/



?>