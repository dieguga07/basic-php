<?php
$array = [];

// Añadir valores al array mientras su longitud sea menor de 120
for ($i = 1; $i <= 120; $i++) {
    $array[] = "Elemento-$i";
}

// Mostrar array por pantalla
foreach ($array as $elemento) {
    echo "$elemento\n";
}