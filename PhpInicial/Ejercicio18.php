<?php
require_once 'funciones_matematicas.php';

echo "Números primos entre 1 y 1000:\n";
for ($i = 1; $i <= 1000; $i++) {
    if (esPrimo($i)) {
        echo "$i ";
    }
}