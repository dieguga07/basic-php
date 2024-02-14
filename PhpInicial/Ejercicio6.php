<?php
// Horas trabajadas
echo "Introduce las horas trabajadas esta semana: ";
$horas_trabajadas = intval(readline());

// Calcular salario semanal
$precio_hora_normal = 12;
$precio_hora_extra = 16;
$horas_normales = min(40, $horas_trabajadas);
$horas_extra = max(0, $horas_trabajadas - 40);
$salario = ($horas_normales * $precio_hora_normal) + ($horas_extra * $precio_hora_extra);

echo "El salario semanal es: $salario euros";