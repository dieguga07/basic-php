<?php
$array = [10, "hola", true, 3.14];

// Imprimir mensaje por pantalla dependiendo del tipo de variable
foreach ($array as $elemento) {
    if (is_int($elemento)) {
        echo "$elemento es de tipo entero.\n";
    } elseif (is_string($elemento)) {
        echo "$elemento es de tipo string.\n";
    } elseif (is_bool($elemento)) {
        echo ($elemento ? "true" : "false") . " es de tipo booleano.\n";
    } elseif (is_float($elemento)) {
        echo "$elemento es de tipo float.\n";
    } else {
        echo "Tipo de variable no reconocido.\n";
    }
}