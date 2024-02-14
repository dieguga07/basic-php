<?php
// Pedir números por teclado
echo "Introduce el primer número: ";
$num1 = intval(readline());
echo "Introduce el segundo número: ";
$num2 = intval(readline());

// Imprimir números impares entre los dos números
echo "Números impares entre $num1 y $num2: ";
for ($i = $num1; $i <= $num2; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}