<?php


// *** Anonymous Function ***
$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Agung Saputro");

// *** Kode : Anonymous Function Sebagai Argument ***
    function sayGoodBye(string $name, $filter) {
        $finalName = $filter($name);
        echo "Good Bye $finalName" . PHP_EOL;
    }

    sayGoodBye("Eko", function(string $name): string {
        return strtoupper($name);
    });

    // Menggunakan Variable Function
    $filterFunction = (function (string $name): string {
    return strtoupper($name);
    });

    sayGoodBye("Atika Nur Aini", $filterFunction);

// *** Kode : Mengakses Variable Diluar ***
$firstName = "Budi";
$lastName = "Setiawan";

$gabungan = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$gabungan();

// Menggunakan return
$gabungan2 = function () use ($firstName, $lastName) {
    return "Hello $firstName $lastName" . PHP_EOL;
};

echo $gabungan2();

// ---


// *** Anonymous Function ***


// *** Anonymous Function ***
// *** Kode : Anonymous Function Sebagai Argument ***
// *** Mengakses Variable Di Luar Closure ***
// *** Kode : Mengakses Variable Diluar ***


// *** Anonymous Function ***
/*
    Anonymous Function
    - Anonymous function Adalah function Tanpa Nama, Di PHP Disebut Juga Dengan Closure
    - Anonymous function Biasanya Digunakan Sebagai Argument Atau Sebagai Value Di Variable
    - Anonymous function Membuat Kita Bisa Mengirim function Sebagai Argument Di function Lainnya
*/

// *** Kode : Anonymous Function Sebagai Argument ***
/*
    Kode : Anonymous Function Sebagai Argument
    function sayGoodBye(string $name, $filter) {
        $finalName = $filter($name);
        echo "Good Bye $finalName" . PHP_EOL;
    }

    sayGoodBye("Eko", function(string $name) {
        return strtoupper($name);
    });
*/

// *** Mengakses Variable Di Luar Closure ***
/*
    Mengakses Variable Di Luar Closure
    - Secara Default, Anonymous function Tidak Bisa Mengakses Variable Yang Terdapat Diluar function
    - Jika Kita Ingin Menggunakan Variable Yang Terdapat Diluar Anonymous function, Kita Perlu Secara
      Explicit Menyebutkannya Menggunakan Kata Kunci use Lalu Diikuti Variable - Variable Yang Ingin
      Kita Gunakan
*/

// *** Kode : Mengakses Variable Diluar ***
/*
    Kode : Mengakses Variable Diluar
    $firstName = "Maria";
    $lastName = "Vania";

    $sayaSexyMaria = function () use ($firstName, $lastName) {
        echo "Hello $firstName $lastName" . PHP_EOL;
    }

    $sayaSexyMaria();
*/



?>