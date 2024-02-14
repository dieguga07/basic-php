<?php
// Mini-diccionario español-inglés
$diccionario = [
    'casa' => 'house',
    'perro' => 'dog',
    'gato' => 'cat',
    'ordenador' => 'computer',
    'libro' => 'book',
    'coche' => 'car',
    'mesa' => 'table',
    'sol' => 'sun',
    'luna' => 'moon',
    'flor' => 'flower'
];

// Seleccionar 5 palabras al azar del diccionario
$palabras = array_rand($diccionario, 5);
$num_correctas = 0;
$num_erroneas = 0;

// Pedir la traducción al inglés de cada palabra y comprobar si es correcta
foreach ($palabras as $palabra) {
    echo "Traduce '$palabra' al inglés: ";
    $traduccion = strtolower(trim(readline()));

    if ($traduccion == $diccionario[$palabra]) {
        echo "¡Correcto!\n";
        $num_correctas++;
    } else {
        echo "Incorrecto. La traducción correcta es '{$diccionario[$palabra]}'.\n";
        $num_erroneas++;
    }
}

// Mostrar el resultado final
echo "\nRespuestas válidas: $num_correctas\n";
echo "Respuestas erróneas: $num_erroneas\n";