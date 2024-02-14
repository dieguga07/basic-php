<?php
// Pedir hora por teclado
echo "Introduce la hora (solo la hora, sin minutos): ";
$hora = intval(readline());

// Mostrar mensaje según la hora
if ($hora >= 6 && $hora < 12) {
    echo "Buenos días";
} elseif ($hora >= 12 && $hora < 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}