<?php
$array = [];

// Pedir 10 números por teclado y almacenarlos en un array
for ($i = 0; $i < 10; $i++) {
    echo "Introduce el número " . ($i + 1) . ": ";
    $numero = intval(readline());
    $array[] = $numero;
}

// Mostrar el valor máximo y mínimo del array
$maximo = max($array);
$minimo = min($array);
echo "El valor máximo del array es: $maximo\n";
echo "El valor mínimo del array es: $minimo\n";