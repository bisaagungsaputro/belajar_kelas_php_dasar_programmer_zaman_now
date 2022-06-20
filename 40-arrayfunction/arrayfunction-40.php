<?php


// *** Kode : Array Function ***
    // Data Array
    $data = [1, 2, 3, 4, 5, 6, 7];

    // Cara 1
    var_dump(array_map(fn($data) => $data * 2, $data));

    // Cara 2 - Versi 1
    $dataResult = array_map(fn(int $value) => $value * 10, $data);
    var_dump($dataResult);

    // Cara 2 - Versi 2
    $mapFunction = fn(int $values) => $values * 10;
    $DataFunction = array_map($mapFunction, $data);
    var_dump($DataFunction);

    // Datanya Dari 7 Dulu Yang Ditampilkan
    rsort($data);
    var_dump($data);

    $person = [
        "first_name" => "Eko",
        "last_name" => "Khannedy"
    ];

    // Hanya Key Yang Ditampilkan
    var_dump(array_keys($person));

    // Hanya Value Yang Ditampilkan
    var_dump(array_values($person));


//  ---


// *** Array Function ***


// *** Array Function ***
// *** Contoh Array Function ***
// *** Kode : Array Function ***


// *** Array Function ***
/*
    Array Function
    - Di PHP Juga Terdapat Banyak Sekali function Bawaan Yang Bisa Kita Gunakan Untuk Memanipulasi Data Array
    - Link Untuk Referensi array function :
      https://www.php.net/manual/en/ref.array.php
*/

// *** Contoh Array Function ***
/*
    Contoh Array Function
    Function                            Keterangan
    array_keys()                        Mengambil Semua Keys Milik array
    array_values()                      Mengambil Semua Values Milik array
    array_map()                         Mengubah Semua Data Array Dengan Callback
    sort()                              Mengurutkan array
    rsort()                             Mengurutkan array Terbalik
    shuffle()                           Mengubah Posisi Data Di array Secara Random
*/

// *** Kode : Array Function ***
/*
    Kode : Array Function
    $data = [1, 2, 3, 4, 5, 6, 7];

    var_dump(array_map(fn($data) => $data * 2, $data));

    rsort($data);
    var_dump($data);

    var_dump(array_keys($data));
    var_dump(array_values($data));
*/



?>