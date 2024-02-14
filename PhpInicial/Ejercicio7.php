<?php
// Pedir notas por teclado
echo "Introduce la primera nota: ";
$nota1 = floatval(readline());
echo "Introduce la segunda nota: ";
$nota2 = floatval(readline());
echo "Introduce la tercera nota: ";
$nota3 = floatval(readline());

// Calcular nota media
$nota_media = ($nota1 + $nota2 + $nota3) / 3;

// Mostrar resultado
echo "La nota media es: $nota_media \n";
if ($nota_media < 5) {
    echo "Insuficiente";
} elseif ($nota_media >= 5 && $nota_media < 7) {
    echo "Suficiente";
} elseif ($nota_media >= 7 && $nota_media < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}