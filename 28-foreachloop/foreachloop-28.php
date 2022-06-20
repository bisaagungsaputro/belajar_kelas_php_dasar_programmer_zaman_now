<?php


// *** Kode : Tanpa For Each Loop ***

// Array Baru
$names = ["Eko", "Kurniawan", "Khannedy"];

/*
- Kita Bikin Counter Dengan Variable $i DARI 0; Karena Index Dimulai Dari 0
- $i Kurang Dari Jumlah Total Array Nya Menggunakan count($names); Lalu Kita Gunakan $++ Untuk Mengambil Dari Satu Per Satu

*/
for ($i = 0; $i < count($names); $i++) {
    // $names => Panggil Nama Dimulai Dari 0 Sampai Selesai
    echo "Ini Data Ke $i Dari Nama : $names[$i]" . PHP_EOL;
}

// *** Kode : For Each Loop ***
$nama = [
    "Agung",
    "Atika",
    "Vira"];

//* $username Simpan Data
foreach ($nama as $username) {
    echo "Hello $username" . PHP_EOL;
}

// *** Kode : For Each Dengan Key ***
$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}


// ---


// *** For Each Loop ***


// *** For Each Loop ***
// *** Kode : Tanpa For Each Loop ***
// *** Kode : For Each Loop ***
// *** Kode : For Each Dengan Key ***


// *** For Each Loop ***
/*
    For Each Loop
    - Kadang Kita Biasa Mengakses Data Array Menggunakan Perulangan
    - Mengakses Data Array Menggunakan Perulangan Sangat Bertele - Tele, Kita Harus Membuat Counter / Menghitung Angka, Lalu Mengakses Array Menggunakan Counter Yang Kita Buat
    - Namun Untungnya, Di PHP Terdapat Perulangan for each, Yang Bisa Digunakan Untuk Mengakses Seluruh Data Di Array Secara Otomatis
*/

// *** Kode : Tanpa For Each Loop ***
/*
    Kode : Tanpa For Each Loop
    $names = ["Eko", "Kurniawan", "Khannedy"];

    for ($i = 0; $i < count($names); $i++) {
        echo "Hello $names[$i]" . PHP_EOL;
    }
*/

// *** Kode : For Each Loop ***
/*
    Kode : For Each Loop
    $nama = [
        "Agung", 
        "Atika", 
        "Vira"];

    //* $username
    foreach ($nama as $username) {
        echo "Hello $username" . PHP_EOL;
    }
*/

// *** Kode : For Each Dengan Key ***
/*
    Kode : For Each Dengan Key
    $person = [
        "first_name" => "Eko",
        "middle_name" => "Kurniawan",
        "last_name" => "Khannedy"
    ];

    foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
*/



?>