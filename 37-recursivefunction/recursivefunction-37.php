<?php


// *** Kode : Factorial Loop ***
    function factorialLoop(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
    }

    // Menggunakan for
    var_dump(factorialLoop(5));

    // Menggunakan Manual
    var_dump(1 * 2 * 3 * 4 * 5);

// *** Kode : Factorial Recursive ***
    function factorialRecursive (int $value): int {
        if ($value == 1) {
            return 1;
        }

        else {
            return $value * factorialRecursive ($value - 1);
        }
    }

    var_dump(factorialRecursive(5));

// *** Kode : Error StackOverFlow ***
    function loop(int $value) {
        if ($value == 0) {
            echo "End Selesai" . PHP_EOL;
        }
        else {
            echo "Loop - $value" . PHP_EOL;
            loop($value - 1);
    }
}
    loop(10);


// ---


// *** Recursive Function ***


// *** Recursive Function ***
// *** Kode : Factorial Loop ***
// *** Kode : Factorial Recursive ***
// *** Problem Dengan Recursive ***
// *** Kode : Error StackOverFlow ***


// *** Recursive Function ***
/*
    Recursive Function
    - Recursive function Adalah Kemampuan function Memanggil function Dirinya Sendiri
    - Kadang Memang Ada Banyak Problem, Yang Lebih Mudah Diselesaikan Menggunakan Recursive function,
      Seperti Contohnya Kasus factorial
*/

// *** Kode : Factorial Loop ***
/*
    Kode : Factorial Loop
    function factorialLoop(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
    }

    var_dump(factorialLoop(5));
*/

// *** Kode : Factorial Recursive ***
/*
    Kode : Factorial Recursive
    function factorialRecursive (int $value): int {
        if ($value == 1) {
            return 1;
        }

        else {
            return $value * factorialRecursive ($value - 1);
        }
    }

    var_dump(factorialRecursive(6));
*/

// *** Problem Dengan Recursive ***
/*
    Problem Dengan Recursive
    - Walaupun Recursive function Itu Sangat Menarik, Namun Kita Perlu Berhati - Hati
    - Jika Recursive Terlalu Dalam, Maka Akan Ada Kemungkinan Terjadi Memory Overflow

    - Jika Terlalu Dalam, Lebih Baik Diganti Dengan Menggunakan Perulangan Biasa Yaitu for Atau while Atau do while
    - Tidak Direkomendasikan Menggunakan Recursive Untuk Terlalu Dalam, Maka Dia Akan Error
*/

// *** Kode : Error StackOverFlow ***
/*
    Kode : Error StackOverFlow
    function loop(int $value) {
        if ($value == 0) {
            echo "Selesai" . PHP_EOL;
        }
        else {
            echo "Loop - $value" . PHP_EOL;
            loop($value - 1);
    }

    loop(3000000);
*/



?>