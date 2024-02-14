<?php
require_once 'funciones_matematicas.php';

echo "Introduce un número binario: ";
$binario = readline();

$decimal = 0;
$longitud = strlen($binario);
for ($i = 0; $i < $longitud; $i++) {
    if ($binario[$longitud - $i - 1] == '1') {
        $decimal += pow(2, $i);
    }
}

echo "El número decimal equivalente es: $decimal";