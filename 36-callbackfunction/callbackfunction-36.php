<?php


// *** Kode : Callback Function ***
    function sayHello(string $name, callable $filter) {
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Eko", function ($name) {return strtoupper ($name); });
    sayHello("Budi", fn ($name) => strtoupper ($name));
    sayHello("Bagus", function (string $name): string{
        return strtoupper($name);
    });
    sayHello("Fadhil", "strtoupper");
    sayHello("Fuad", "strtolower");


// ---


// *** Callback Function ***


// *** Callback Function ***
// *** Kode : Callback Function ***


// *** Callback Function ***
/*
    Callback Function
    - Callback Adalah Sebuah Mekanisme Sebuah function Memanggil function Lainnya Sesuai Dengan Yang Diberikan Di Argument
    - Hal Ini Sebenarnya Sudah Kita Lakukan Di Materi Variable function Dan Anonymous function
    - Namun Di PHP Ada Cara Lain Untuk Implementasi Callback, Yaitu Menggunakan Tipe Data callable
    - Dan Untuk Memanggil Callback function Tersebut, Kita Bisa Menggunakan function call_user_func(callable, arguments)
*/

// *** Kode : Callback Function ***
/*
    Kode : Callback Function
    function sayHello(string $name, callable $filter) {
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Eko", function ($name) {return strtoupper ($name); });
    sayHello("Eko", fn ($name) => strtoupper ($name));
    sayHello("Eko", "strtoupper");
    sayHello("Eko", "strtoupper");
*/



?>