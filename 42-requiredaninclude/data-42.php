<?php


// *** Kode : Include Berkali - Kali - Tidak Boleh Karena Bisa Error ***
/*
- Wajib Include Paling Atas Di Taruhnya
- Jika Include Berkali - Kali
*/
// include "requiredaninclude.php";
// include "requiredaninclude.php";

// echo sayHello("Eko", "Kurniawan");

//*** Kode : Include_Once ***
    include_once "requiredaninclude-42.php";
    require_once "requiredaninclude-42.php";


    echo sayHello("Eko", "Kurniawan") . PHP_EOL;
    echo sayHello("Bambang", "Pamungkas");




?>