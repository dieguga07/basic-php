<?php
// Pedir números por teclado
echo "Introduce el primer número: ";
$num1 = intval(readline());
echo "Introduce el segundo número: ";
$num2 = intval(readline());
echo "Introduce el tercer número: ";
$num3 = intval(readline());

// Ordenar números
$numeros = [$num1, $num2, $num3];
sort($numeros);

echo "Números ordenados: ";
foreach ($numeros as $numero) {
    echo "$numero ";
}