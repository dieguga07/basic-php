<?php
// Combinación de la caja fuerte
$combinacion_correcta = "1234";

// Intentos para abrir la caja fuerte
$intentos = 4;

while ($intentos > 0) {
    echo "Introduce la combinación de la caja fuerte (4 cifras): ";
    $combinacion = readline();

    if ($combinacion === $combinacion_correcta) {
        echo "La caja fuerte se ha abierto satisfactoriamente";
        break;
    } else {
        echo "Lo siento, esa no es la combinación. Te quedan " . ($intentos - 1) . " intentos\n";
        $intentos--;
    }
}

if ($intentos === 0) {
    echo "Te has quedado sin intentos. La caja fuerte permanece cerrada.";
}