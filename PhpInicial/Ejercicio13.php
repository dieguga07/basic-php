<?php
// Pedir el número de términos por teclado
echo "Introduce el número de términos de la serie de Fibonacci: ";
$n = intval(readline());

// Calcular la serie de Fibonacci
$term1 = 0;
$term2 = 1;
echo "Los primeros $n términos de la serie de Fibonacci son: ";
echo "$term1, $term2";

for ($i = 2; $i < $n; $i++) {
    $term3 = $term1 + $term2;
    echo ", $term3";
    $term1 = $term2;
    $term2 = $term3;
}