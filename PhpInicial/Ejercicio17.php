<?php
// Inicializar variables
$total = 0;
$contador = 0;

// Pedir números al usuario y calcular la media
echo "Introduce números positivos (introduce un número negativo para terminar):\n";
while (true) {
    echo "Número: ";
    $numero = floatval(readline());

    // Verificar si el número es negativo para terminar el bucle
    if ($numero < 0) {
        break;
    }

    // Sumar el número al total y aumentar el contador
    $total += $numero;
    $contador++;
}

// Calcular la media
if ($contador > 0) {
    $media = $total / $contador;
    echo "La media de los números introducidos es: $media";
} else {
    echo "No se introdujeron números positivos.";
}