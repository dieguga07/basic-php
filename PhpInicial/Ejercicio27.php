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

// Pedir una palabra en español
echo "Introduce una palabra en español: ";
$palabra = strtolower(trim(readline()));

// Mostrar la traducción en inglés si la palabra existe en el diccionario
if (array_key_exists($palabra, $diccionario)) {
    echo "La traducción de '$palabra' en inglés es: " . $diccionario[$palabra] . "\n";
} else {
    echo "La palabra '$palabra' no se encuentra en el diccionario.\n";
}