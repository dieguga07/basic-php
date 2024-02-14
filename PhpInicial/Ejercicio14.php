<?php
// Pedir número por teclado
echo "Introduce un número para comprobar si es primo: ";
$num = intval(readline());

// Comprobar si es primo
$es_primo = true;
if ($num <= 1) {
    $es_primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $es_primo = false;
            break;
        }
    }
}

if ($es_primo) {
    echo "$num es primo";
} else {
    echo "$num no es primo";
}