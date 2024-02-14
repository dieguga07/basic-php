<?php
// Función para verificar si un número es capicúa
function esCapicua($numero) {
    return $numero == voltea($numero);
}

// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para encontrar el siguiente número primo mayor que el número dado
function siguientePrimo($numero) {
    $siguiente = $numero + 1;
    while (true) {
        if (esPrimo($siguiente)) {
            return $siguiente;
        }
        $siguiente++;
    }
}

// Función para calcular la potencia de un número
function potencia($base, $exponente) {
    return pow($base, $exponente);
}

// Función para contar los dígitos de un número entero
function digitos($numero) {
    return strlen((string)$numero);
}

// Función para voltear un número
function voltea($numero) {
    return intval(strrev((string)$numero));
}

// Función para obtener el dígito en una posición específica de un número entero
function digitoN($numero, $posicion) {
    $numero = strval($numero);
    return $numero[$posicion];
}

// Función para encontrar la posición de la primera ocurrencia de un dígito en un número
function posicionDeDigito($numero, $digito) {
    $posicion = strpos(strval($numero), strval($digito));
    return ($posicion !== false) ? $posicion : -1;
}

// Función para quitar un número de dígitos por la derecha de un número
function quitaPorDetras($numero, $n) {
    return intval(substr(strval($numero), 0, -$n));
}

// Función para quitar un número de dígitos por la izquierda de un número
function quitaPorDelante($numero, $n) {
    return intval(substr(strval($numero), $n));
}

// Función para añadir un dígito por la derecha de un número
function pegaPorDetras($numero, $digito) {
    return intval(strval($numero) . strval($digito));
}

// Función para añadir un dígito por la izquierda de un número
function pegaPorDelante($numero, $digito) {
    return intval(strval($digito) . strval($numero));
}

// Función para obtener un trozo de un número, dados los índices inicial y final
function trozoDeNumero($numero, $inicio, $fin) {
    return intval(substr(strval($numero), $inicio, $fin - $inicio + 1));
}

// Función para juntar dos números
function juntaNumeros($numero1, $numero2) {
    return intval(strval($numero1) . strval($numero2));
}