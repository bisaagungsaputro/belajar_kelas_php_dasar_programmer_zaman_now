<?php


// *** Membuat Array Metode Lama / Array Numerik ***
$values = array (10, 7, 9, 1, 7.7);
var_dump($values);

// *** Membuat Array Metode Baru / Array Numerik ***
$nama = ["Agung", "Vira", "Atika", "Tania"];
var_dump($nama);

// *** Kode : Operasi Array / Array Numerik ***
echo "================================================== Melihat Data \n";
// *** Melihat Data ***
$names = ["Budi", "Usaamah", "Hasan"];
var_dump($names);
var_dump($names[0]);

echo "================================================== Mengubah Data \n";
// *** Mengubah Data ***
$names[0] = "Agung";
var_dump($names);

echo "================================================== Menghapus Data \n";
// *** Menghapus Data ***
unset($names[1]);
var_dump($names);

echo "================================================== Menambah Data \n";
// *** Menambah Data ***
$names[] = "Eko";
var_dump($names);

echo "================================================== Melihat Total Data \n";
// *** Melihat Total Data ***
var_dump(count($names));

echo "================================================== Kode Membuat Map Array / Array Assosiatif \n";


// *** Kode Membuat Map / Array Assosiatif - Cara Membuat Array Lama ***
$eko = array(
    "id" => "Eko",
    "name" => "Eko Kurniawan Khannedy",
    "age" => 30
);
var_dump($eko);
echo "\n";
// Melihat Data Secara Spesifik
var_dump($eko["name"]);

echo "=================================================== \n";

// *** Kode Membuat Map / Array Assosiatif - Cara Membuat Array Baru ***
$budi = [
    "id" => "Budi",
    "name" => "Budi Setiawan",
    "age" => 25
];
var_dump($budi);
echo "\n";
// Melihat Data Secara Spesifik
var_dump($budi["id"]);

echo "==================================================== Array Multidimensional / Array Di Dalam Array \n";
// *** Kode : Array Multidimensional / Array Di Dalam Array ***
// Cara Array Lama
$atika = array (
  "id" => "Atika",
  "name" => "Atika Nur Aini",
  "age" => 23,
  "adress" => [
    "city" => "Jakarta",
    "country" => "Indonesia"
  ]
  );

var_dump($atika["adress"]["city"]);

echo "\n";

// Cara Array Baru
$vira = [
  "id" => "Vira",
  "name" => "Vira Agistasari",
  "age" => 22,
  "adress" => [
    "city" => "Jawa Tengah",
    "country" => "Indonesia"
  ]
  ];

var_dump($vira["adress"]["country"]);



// ---


// *** Tipe Data Array ***


// *** Tipe Data Array ***
// *** Cara Kerja Array ***
// *** Kode : Membuat Array ***
// *** Operasi Array ***
// *** Kode : Operasi Array / Array Numerik ***
// *** Array Sebagai Map / Array Assosiatif ***
// *** Kode : Membuat Map / Array Assosiatif ***
// *** Array Multidimensional / Array Di Dalam Array ***
// *** Kode : Array Multidimensional / Array Di Dalam Array ***


// *** Tipe Data Array ***
/*
    Tipe Data Array
    - Array Adalah Tipe Data Yang Berisikan Kosong Atau Banyak Data / Kumpulan Data
    - Array Di PHP Berisikan Data Dengan Jenis Yang Berbeda - Beda (Bisa Bebas Masukkan Tipe Data Secara Bersamaan Seperti String, Number, Dan Boolean)
      Di Java Itu Array Hanya Bisa Menampung 1 Jenis Tipe Data Aja, Jika Ingin Masukkan Tipe Data String, Maka Hanya Bisa Tipe Data String Aja Yang Bisa Dimasukkan 
    - Array Di PHP Memiliki Panjang Dinamis, Artinya Kita Bisa Menambahkan Data Ke Array Sebanyak - Banyaknya, Tidak Dibatasi Kapasitasnya
      Di Java Sudah Ditentukan ukurannya Array / Jumlah Data Yang Bisa Ditampung Array
*/

// *** Cara Kerja Array ***
/*
    Cara Kerja Array
    First Index Dimulai Dari 0
    Indices => Nilai Jumlah => Contoh Ada 10 ((0,1,2,3,4,5,6,7,8,9))
    Array Lenght/Panjang => Contoh Ada 10
    Element At Index 8 => Memanggil Khusus Untuk Menggunakan (CRUD)
*/

// *** Kode : Membuat Array / Array Numerik ***
/*
    Kode : Membuat Array

    Membuat Array Metode Lama
    $values = array (1, 2, 3, 4);
    var_dump($values);

    Membuat Array Metode Baru
    $names = ["Agung Saputro", "Atika Nur Aini", "Vira Agistasari"];
    var_dump($names);
*/

// *** Operasi Array ***
/*
    Operasi Array
    Operasi                                       Keterangan
    - $array[index]                               Mengakses Data Di Array Pada Nomor Index
    - $array[index] = value                       Mengubah Data Di Array Pada Nomor Index Dengan Value Baru
    - $array[] = value                            Menambah Data Di Array Pada Posisi Paling Belakang
    - unset($array[index])                        Menghapus Data Di Array, Index Otomatis Hilang Dari Array
    - count($array)                               Mengambil Total Data Di Array / Mengetahui Total Data Di Array
*/

// *** Kode : Operasi Array / Array Numerik ***
/*
    Kode : Operasi Array
    $names = ["Agung Saputro", "Atika Nur Aini", "Vira Agistasari"];
    var_dump($names[0]);
    $names[0] = "Amanda Manopo";
    var_dump($names);
    unset($names[1]);
    var_dump($names);
    $names[] = "Maria Vania";
    var_dump($names);
    var_dump(count($names));
*/

// *** Array Sebagai Map / Array Assosiatif ***
/*
    Array Sebagai Map
    - Biasanya Di Kebanyakan Bahasa Pemprograman, Terdapat Tipe Data Bernama Map
      Yaitu Asosiasi Antara Key & Value
    - Namun Di PHP, Map Bisa Dibuat Menggunakan Array
    - Secara Default Array Akan Menggunakan Index(Number) Sebagai Key & Valuenya
      Kita Bisa Bebas Memasukkan Data Ke Dalam Array
    - Namun Jika Kita Ingin, Kita Juga Bisa Mengubah Indexnya Tidak Harus Menggunakan Number
      Bisa Gunakan Tipe Data Lain, Seperti String Misalnya
    - Hal Tersebut Terlihat Seperti Map Di Bahasa Pemprograman Lainnya
*/

// *** Kode : Membuat Map / Array Assosiatif ***
/*
  Kode : Membuat Map / Array Assosiatif
  // Cara Array Lama
  $eko = array (
    "id" => "Eko",
    "nama" => "Eko Kurniawan",
    "age" => 30
  );

  // Cara Array Baru
  $budi = [
    "id" => "Eko",
    "nama" => "Eko Kurniawan",
    "age" => 30
  ];
*/

// *** Array Multidimensional / Array Di Dalam Array ***
/*
  Array Multidimensi / Array Di Dalam Array
  - Seperti Dijelaskan Di Awal, Array Di PHP Bisa Berisikan Data Apapun
  - Sehingga Kita Juga Bisa Membuat Array Di Dalam Array Jika Memang Dibutuhkan
*/

// *** Kode : Array Multidimensional / Array Di Dalam Array ***
/*
  Kode : Array Multidimensional / Array Di Dalam Array
  // Cara Array Lama
  $atika = array (
    "id" => "Atika",
    "name" => "Atika Nur Aini",
    "age" => 23,
    "adress" => [
      "city" => "Jakarta",
      "country" => "Indonesia"
    ]
    );

  // Cara Array Baru
  $vira = [
    "id" => "Vira",
    "name" => "Vira Agistasari",
    "age" => 22,
    "adress" => [
      "city" => "Jawa Tengah",
      "country" => "Indonesia"
    ]
    ];
*/



?>