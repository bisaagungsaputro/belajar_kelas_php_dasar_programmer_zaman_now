<?php


// *** Kode : Tanpa Null Coalescing Operator ***
$data = [
    "action" => "Create", "Agung"
];

if (isset($data["action"])) {
    $action = $data["action"];
}
else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// *** Kode : Null Coalescing Operator ***
// Rekomendasikan, Hanya Bisa Memanggil 1 Value Saja
$penjual = [
    "Action" => 90 , 70, 69
];

$pembeli = $penjual["Action"] ?? "Nothing";

echo $pembeli . PHP_EOL;


// ---


// *** Null Coalescing Operator ***


// *** Null Coalescing Operator ***
// *** Kode : Tanpa Null Coalescing Operator ***
// *** Kode : Null Coalescing Operator ***


// *** Null Coalescing Operator ***
/*
    Null Coalescing Operator
    - Sebelumnya Kita Tahu Bahwa Data Kosong Direpresentasikan Dengan Data null Di PHP
    - Dan Hal Yang Paling Repot Di PHP Adalah Mengecek Apakah Sebuah Data Ada Atau Tidak, Dan Juga Apakah Data Tersebut Isinya null Atau Bukan
    - Biasanya Untuk Melakukan Itu, Kita Perlu Menggunakan Pengecekan if Statement Dengan Function isset($Variable)
    - Namun Untungnya Di PHP Ada null coalescing Operator Menggunakan Tanda ??

    => 
*/

// *** Kode : Tanpa Null Coalescing Operator ***
/*
    Kode : Tanpa Null Coalescing Operator
    $data = [];

    if (isset ($data['action'])) {
        $action = $data['action];
    }
    else {
        $action = 'nothing';
    }

    echo $action;
*/

// *** Kode : Null Coalescing Operator ***
/*
    Kode : Null Coalescing Operator
    $penjual = [];

    $pembeli = $penjual["Action"] ?? "Nothing";

    echo $pembeli;
*/



?>