<?php

$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . "\n";
    $counter++;

    if ($counter > 10) {
        break;
    }
}


