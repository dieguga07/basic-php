<?php
require_once 'funciones_matematicas.php';

echo "Introduce un número decimal: ";
$decimal = intval(readline());

$binario = "";
while ($decimal > 0) {
    $binario = ($decimal % 2) . $binario;
    $decimal = intval($decimal / 2);
}

echo "El número binario equivalente es: $binario";