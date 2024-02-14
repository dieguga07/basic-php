<?php
// Pedir número por teclado
echo "Introduce un número de hasta 4 cifras: ";
$num = intval(readline());

// Obtener primera y última cifra
$primera_cifra = intval(substr($num, 0, 1));
$ultima_cifra = $num % 10;

// Determinar paridad
$paridad = ($num % 2 == 0) ? "par" : "impar";

echo "Primera cifra: $primera_cifra \n";
echo "Última cifra: $ultima_cifra \n";
echo "El número es $paridad";