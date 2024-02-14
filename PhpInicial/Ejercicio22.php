<?php
// Array de 8 números enteros aleatorios entre 0 y 10
$array = [];
for ($i = 0; $i < 8; $i++) {
    $array[] = rand(0, 10);
}

// Función para mostrar un array
function mostrarArray($array) {
    echo "[";
    foreach ($array as $elemento) {
        echo "$elemento, ";
    }
    echo "]";
}

// Función para devolver un array sin el último elemento
function eliminarUltimoElemento($array) {
    $resultado = [];
    $longitud = count($array);
    for ($i = 0; $i < $longitud - 1; $i++) {
        $resultado[] = $array[$i];
    }
    return $resultado;
}

// Mostrar array original
echo "Array original: ";
mostrarArray($array);
echo "\n";

// Mostrar longitud del array
echo "Longitud del array: " . count($array) . "\n";

// Voltear el array
echo "Array volteado: ";
mostrarArray(array_reverse($array));
echo "\n";

// Buscar elemento introducido por URL
$elemento_buscado = isset($_GET['elemento']) ? intval($_GET['elemento']) : null;
if ($elemento_buscado !== null) {
    $indice = -1;
    foreach ($array as $key => $value) {
        if ($value == $elemento_buscado) {
            $indice = $key;
            break;
        }
    }
    if ($indice != -1) {
        echo "El elemento $elemento_buscado se encuentra en el índice $indice del array.\n";
    } else {
        echo "El elemento $elemento_buscado no se encuentra en el array.\n";
    }
}