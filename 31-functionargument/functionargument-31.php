<?php


// *** Kode : Function Argument ***
/*
Cara 2
function helloWorld($name, $lastname)
*/
// Cara 1
    function sayHello($name) {
        echo "Hello $name" . PHP_EOL;
    }

    sayHello("Vira");
    sayHello("Agistasari");

// *** Kode : Default Argument Value ***
    function HelloWorld($names = "Agung") {
        echo "Hello $names" . PHP_EOL;
    }

    // Paramater Default
    HelloWorld();

    HelloWorld("Saputro");

// *** Kode : Kesalahan Default Argument Value ***
// Cara 1
/*
Masuk Ke $suami Karena Dia Parameter Pertama
Jika Tidak Salah Dalam Default Argument, Taruh Di Belakang
*/
bahtera("Agung Saputro");

function bahtera($suami, $istri = "Atika Nur Aini")
{
    echo "Hello Keluarga $suami" . PHP_EOL;
    echo "Dan $istri" . PHP_EOL;
}

//*** Kode : Type Declaration ***
    function sum (int $first, int $last) {
        $total = $first + $last;
        echo "Total $first + $last = $total" . PHP_EOL;
    }

    sum(100, 200);

    // Tipe Data Array Tidak Bisa Karena Error
    // sum([], []);

// *** Kode : Variable - Length Argument List ***
// Pakai Array - Cara 1
    function sumAll(array $values) {
        $hasil = 0;

        foreach ($values as $value) {
            $hasil += $value;
        }

        echo "Total " . implode(" + ", $values) . " = $hasil" . PHP_EOL;
    }

    sumAll([10, 20, 30, 40]);

// *** Kode : Variable - Length Argument List ***
// Cara 2
// Konversi Menjadi Array Bisa Menggunakan Arument List
function sumbu(... $sumbuall)
{
    $end = 0;

    foreach ($sumbuall as $sumbumini) {
        $end += $sumbumini;
    }

    // implode => Mengubah Array Menjadi String Dengan Pemisah Tanda Koma ("," , $values)
    echo "Total " . implode(" + ", $sumbuall) . " = $end" . PHP_EOL;
}

$sumbumini = [1, 2, 3, 4, 5];
sumbu(100, 200, 300, 400);
    // sumAll(...[10, 20 , 30 , 40]);
sumbu(... $sumbumini);


// ---


// *** Function Argument ***


// *** Function Argument ***
// *** Kode : Function Argument ***
// *** Default Argument Value ***
// *** Kode : Default Argument Value ***
// *** Kesalahan Default Argument Value ***
// *** Kode : Kesalahan Default Argument Value ***
// *** Type Declaration ***
// *** Valid Types (1) ***
// *** Kode : Type Declaration ***
// *** Variable - Length Argument List ***
// *** Kode : Variable - Length Argument List ***


// *** Function Argument ***
/*
    Function Argument
    - Kita Bisa Mengirim Informasi Ke Function Yang Ingin Kita Panggil
    - Untuk Melakukan Hal Tersebut, Kita Perlu Menambahkan Argument Atau Parameter Di Function Yang Sudah Kita Buat
    - Cara Membuat Argument Sama Seperti Cara Membuat Variable
    - Argument Ditempatkan Di Dalam Kurung () Di Deklarasi Function
    - Argument Bisa Lebih Dari Satu, Jika Lebih Dari Satu, Harus Dipisah Menggunakan Tanda Koma / ,
*/

// *** Kode : Function Argument ***
/*
    Kode : Function Argument
    function sayHello($name) {
        echo "Hello $name" . PHP_EOL;
    }

    sayHello("Eko");
    sayHello("Khannedy");
*/

// *** Default Argument Value ***
/*
    Default Argument Value
    - PHP Mendukung Default Argument Value
    - Fitur Ini Memungkinkan Jika Ketika Kita Memanggil Function Tidak Memasukkan Parameter, Kita Bisa Menentukan Data Default Nya Apa
*/

// *** Kode : Default Argument Value ***
/*
    Kode : Default Argument Value
    function HelloWorld($names = "Agung") {
        echo "Hello $names" . PHP_EOL;
    }

    HelloWorld();
    HelloWorld("Saputro");
*/

// *** Kesalahan Default Argument Value ***
/*
    Kesalahan Default Argument Value
    - Default Argument Value Bisa Disimpan Argument Manapun
    - Namun Jika Argument Lebih Dari Satu Dan Kita Menyimpan Default Argument Value Di Parameter Awal, Maka Itu Kurang Berguna
*/

// *** Kode : Kesalahan Default Argument Value ***
/*
    Kode : Kesalahan Default Argument Value
    function bahtera($suami = "Agung Saputro", $istri) {
        echo "Hello Keluarga $suami $istri" . PHP_EOL;
    }

    bahtera("Atika Nur Aini");
*/

// *** Type Declaration ***
/*
    Type Declaration
    - Sama Seperti Variable, Argument Di PHP Bisa Kita Masukkan Data Yang Dinamis
    - Kadang Terlalu Dinamis Juga Menyulitkan Jika Ternyata Kita Hanya Ingin Membuat Function
      Yang Menggunakan Argument Dengan Tipe Data Tertentu
    - Untungnya Di PHP, Kita Bisa Menambahkan Type Data Di Argument,
      Sehingga PHP Akan Melakukan Pengecekan Ketika Kita Mengirim Value Ke Function Tersebut
    - Jika Type Data Value Tidak Sesuai, Maka Akan Terjadi Error
    - Secara Default PHP Akan Melakukan Percobaan Konversi Tipe Data Secara Otomatis,
      Misal Jika Kita Menggunakan Tipe int, Tapi Kita Mengirim String,
      Maka PHP Akan Otomatis Mengkonversi String Tersebut Menjadi int
*/

// *** Valid Types (1) ***
/*
    Valid Types (1)
    Type                        Keterangan
    class/ interface / OOP      Parameter Harus Tipe class / interface
    self                        Parameter Harus Sama Dengan class Dimana function Ini Dibuat
    array                       Parameter Harus array
    callable                    Parameter Harus callable
    bool                        Parameter Harus boolean
    flaot                       Parameter Harus floating point
    int                         Parameter Harus integer number
    string                      Parameter Harus string
    interable / OOP             Parameter Harus array Atau Tipe Traversable
    object / OOP                Parameter Harus Sebuah object
*/

// *** Kode : Type Declaration ***
/*
    Kode : Type Declaration
    function sum (int $first, int $last) {
        $total = $first + $last;
        echo "Total $first + $last = $total" . PHP_EOL;
    }

    sum("100", "100");
    sum(100, 100);
    sum(true, false);
    sum([], []);
*/

// *** Variable - Length Argument List ***
/*
    Variable - Length Argument List
    - Variable - Length Argument List Merupakan Kemampuan Dimana Kita Bisa Membuat Sebuah Parameter Yang Menerima Banyak Value
    - Variable - Length Argument List Secara Otomatis Akan Membuat Argument Tersebut Menjadi Array,
      Namun Kita Tidak Perlu Manual Mengirim Array Ke Functionnya
    - Variable - Length Argument List Hanya Bisa Dilakukan Di Argument Posisi Terakhir
    - Untuk Membuat Variable - Length Argument List, Kita Bisa Menggunakan Tanda ... (Titik Tiga Kali) Sebelum Nama Argument
*/

// *** Kode : Variable - Length Argument List ***
/*
    Kode : Variable - Length Argument List
    function sumAll(...$values) {
        $hasil = 0;

        foreach ($values as $value) {
            $hasil += $value;
        }

        echo "Total " . implode(" + ", $value) . " = $hasil" . PHP_EOL;
    }

    sumAll(10, 20, 30, 40);
    sumAll(...[10, 20 , 30 , 40]);
*/



?>